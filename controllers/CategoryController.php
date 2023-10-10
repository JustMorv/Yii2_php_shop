<?
namespace app\controllers;

use app\models\Category;
use app\models\Product;
use Yii;
use yii\data\Pagination;
use yii\web\HttpException;

class CategoryController extends AppController
{
    public function actionIndex()
    {
        $hits = Product::find()->andWhere(['hit' => 1])->limit(6)->all();
        $this->setMeta("E-shoppeR");
        return $this->render("index", [
            "hits" => $hits,
        ]);
    }

    public function actionView($id)
    {
        // $id = Yii::$app->request->get("id");
        // $product = Product::find()->andWhere(["category_id" => $id])->all();
        $category = Category::findOne($id);
        if (empty($category)) {
            throw new HttpException(404, "Такой категории нет");
        }

        $query = Product::find()->andWhere(["category_id" => $id]);

        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'pageSizeParam' => false,]);

        $product = $query->offset($pages->offset)->limit($pages->limit)->all();

        $this->setMeta('E-shoppeR | ' . $category->name, $category->keywords, $category->description);

        return $this->render("view", ['product' => $product, 'category' => $category, 'pages' => $pages]);
    }

    public function actionSearch()
    {
        $q = Yii::$app->request->get("q");
        $query = Product::find()->where(['like', 'name', 'q']);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'pageSizeParam' => false,]);

        $product = $query->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render("search", [
            'product'=>$product,
            'pages'=>$pages,
            'q'=>$q,
        ]);

    }
}