<?

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use Yii;
use yii\web\HttpException;

class ProductController extends AppController{
    public function actionView($id){
        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);
        
        if(empty($product)){
            throw new HttpException(404, "Такой категории нет");
        }
        $hits = Product::find()->andWhere(['hit' => 1])->limit(3)->all();
        $this->setMeta('E-shoppeR | ' . $product->name, $product->keywords, $product->description);


        return $this->render('view', [
            'product'=> $product,
            'hits' => $hits,
        ]);
    }

}