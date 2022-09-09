<?php namespace App\Controllers;

use App\Models\AreasModel;
use App\Models\SchoolsModel;
use App\Models\UsersModel;
use App\Models\ItemModel;
use App\Models\ItemcatModel;
use App\Models\ItemmainModel;
use App\Models\ItemsubModel;
use App\Models\ItemupModel;

use CodeIgniter\Controller;

class Pages extends Controller {

    public function __construct()
    {
        $segments = new \CodeIgniter\HTTP\URI();
        $segments = current_url(true);
        helper(['function', 'form']);
        $session = session();
        $session->set('area_code',lang('Constant.area_code'));
        $session->set('sch_code',lang('Constant.sch_code'));

    }

    public function index() {
        $usersModel = new UsersModel;
        $areasModel = new AreasModel;
        $schoolsModel = new SchoolsModel;
        $ItemsModel = new ItemModel;
        $ItemscatModel = new ItemcatModel;
        $ItemsmainModel = new ItemmainModel;
        $ItemssubModel = new ItemsubModel;
        $ItemsupModel = new ItemupModel;

        $data = [
			//'users' => $usersModel->where('status', '1')->orderBy('id', 'desc')->findAll(5),
            'item_1' => $ItemsModel->getItemAllByMainBySub(1,1),
            'item_2' => $ItemsModel->getItemAllByMainBySub(1,2),
            'item_3' => $ItemsModel->getItemAllByMainBySub(1,3),
            'item_4' => $ItemsModel->getItemAllByMainBySub(1,4),
            'item_5' => $ItemsModel->getItemAllByMainBySub(1,5),
            'item_6' => $ItemsModel->getItemAllByMainBySub(2,1),
            'item_7' => $ItemsModel->getItemAllByMainBySub(2,2),
            'itemsub' => $ItemssubModel->getItemAllByMainBySub(),
            //'course' => $courseModel->where('c_status', '1')->orderBy('id', 'desc')->findAll(6),
            //'pager' => $courseModel->pager,
            'title' => 'หน้าหลัก'
        ];

        echo view('frontend/index',$data);
        
    }

    public function view($page = 'home') {
        if (!is_file(APPPATH.'/Views/'.$page.'.php')) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page);
        echo view('templates/frontend/header', $data);
        echo view('frontend/'.$page, $data);
        echo view('templates/frontend/footer', $data);

    }

    public function Item9_detail($main = null,$sub = null,$cate = null) {
            $itemsModel = new ItemModel;
            $itemsubModel = new ItemsubModel;
            $itemupModel = new ItemupModel;
            
            $subName = $itemsubModel->getItemSubAllByMainBySub($main,$sub);
			$subNameCate = $itemsModel->getItemByMainBySubByCate($main,$sub,$cate);

            $data = [
                'item' => 9,
                'itemall' => $itemsModel->getItemAllByMainBySub($main,$sub),
				'itemsuball' => $itemupModel->getItemAllByMainBySubByCate($main,$sub,$cate),
                'main' => $main,
                'sub' => $sub,
                'cate' => $cate,
				'gr' => '9',
                'title' => [
                    '1' => 'จัดการระบบ',
                    '2' => 'การเปิดเผยข้อมูล',
                    '3' => $subName['is_category_name'],
                    '4' => $subNameCate['it_topic']
                ],                
				'url' => [
                    '1' => "",
                    '2' => base_url(session()->get('role') . '/item9/'),
                    '3' => base_url(session()->get('role') . '/item9/'.$main.'/'.$sub),
                    '4' => ""
                ]
            ];

        echo view('templates/frontend/header', $data);
        echo view('frontend/item9_detail_ajax');
        echo view('templates/frontend/footer');
        
    }


    public function Item10_detail($main = null,$sub = null,$cate = null) {
            $itemsModel = new ItemModel;
            $itemsubModel = new ItemsubModel;
            $itemupModel = new ItemupModel;
            
            $subName = $itemsubModel->getItemSubAllByMainBySub($main,$sub);
			$subNameCate = $itemsModel->getItemByMainBySubByCate($main,$sub,$cate);

            $data = [
                'item' => 10,
                'itemall' => $itemsModel->getItemAllByMainBySub($main,$sub),
				'itemsuball' => $itemupModel->getItemAllByMainBySubByCate($main,$sub,$cate),
                'main' => $main,
                'sub' => $sub,
                'cate' => $cate,
				'gr' => '10',
                'title' => [
                    '1' => 'จัดการระบบ',
                    '2' => 'การป้องกันการทุจริต',
                    '3' => $subName['is_category_name'],
                    '4' => $subNameCate['it_topic']
                ],                
				'url' => [
                    '1' => "",
                    '2' => base_url(session()->get('role') . '/item10/'),
                    '3' => base_url(session()->get('role') . '/item10/'.$main.'/'.$sub),
                    '4' => ""
                ]
            ];

        echo view('templates/frontend/header', $data);
        echo view('frontend/item10_detail_ajax');
        echo view('templates/frontend/footer');
        
    }

}