<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\Country;
use yii\data\Sort;
use yii\data\ArrayDataProvider;
use yii\data\ActiveDataProvider;

class CountryController extends Controller
{


    public function actionIndex()
    {

        $query = Country::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $sort = new Sort([
            'attributes' => [
                'name' => [
                    'asc' => ['name' => SORT_ASC],
                    'desc' => ['name' => SORT_DESC],
                    'default' => SORT_DESC,
                    'label' => 'Name'
                ]
            ],
            'defaultOrder' => [
                'name' => SORT_DESC
            ],
            'sortParam' => 'sort'
        ]);
        //echo $sort->createUrl('name');
       // echo $sort->link('name') ;exit;
        //  $countries = $query->orderBy('name')

        //数据提供者示例
        /*$data = [
            ['id' => 1, 'name' => 'name 1'],
            ['id' => 2, 'name' => 'name 2'],
            ['id' => 100, 'name' => 'name 100'],
        ];

        $provider = new ArrayDataProvider([
            'allModels' => $data,
            'key'=>function($model){
                return md5($model['id']);
            },
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [
                'attributes' => ['id', 'name'],
                'defaultOrder'=>['id'=>SORT_DESC]
            ],
        ]);

        // 获取当前请求页的每一行数据
        $rows = $provider->getModels();
        $keys= $provider->getKeys();
        $count=$provider->getTotalCount();
        var_dump($rows);exit;*/

          /* //使用 ActiveDataProvider 数据提供者
             $provider = new ActiveDataProvider([
                   'query' => $query,
                   'pagination' => [
                       'pageSize' => 10,
                   ],
                   'sort' => [
                       'defaultOrder' => [
                           'code' => SORT_ASC,
                       ]
                   ],
               ]);*/


        $countries = $query->orderBy($sort->orders)
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
    //        'provider'=>$provider
        ]);
    }


}