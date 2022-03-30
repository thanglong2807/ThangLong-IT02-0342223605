<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('admin/index');
    }
    //phần components
    public function componentsScrollbar(){
        return view('admin/components/extended-ui-perfect-scrollbar');
    }
    public function componentsDivider(){
        return view('admin/components/extended-ui-text-divider');
    }
    public function componentsboxicon(){
        return view('admin/components/icons-boxicons.blade');
    }
    // form table
    public function formHorizontal(){
        return view('admin/form-table/form-layouts-horizontal');
    }
    public function formVertical(){
        return view('admin/form-table/form-layouts-vertical.blade');
    }
    public function formInputs(){
        return view('admin/form-table/forms-basic-inputs');
    }
    public function formGroups(){
        return view('admin/form-table/forms-input-groups');
    }
    public function formTablesBasic(){
        return view('admin/form-table/tables-basic');
    }
    // layout
    public function layoutsBlank(){
        return view('admin/layouts/layouts-blank');
    }
    public function layoutsContainer(){
        return view('admin/layouts/layouts-container');
    }

    public function layoutsFluid(){
        return view('admin/layouts/layouts-fluid');
    }

    public function layoutsMenu(){
        return view('admin/layouts/layouts-without-menu');
    }

    public function layoutsnavbar(){
        return view('admin/layouts/layouts-without-navbar');
    }
    // pages
    public function pagesAccountSettings(){
        return view('admin/pages/pages-account-settings-account');
    }
    public function pagesConnections(){
        return view('admin/pages/pages-account-settings-connections');
    }
    public function pagesNotifications(){
        return view('admin/pages/pages-account-settings-notifications');
    }
    public function pagesError(){
        return view('admin/pages/pages-misc-error');
    }
    public function pagesMaintenance(){
        return view('admin/pages/pages-misc-under-maintenance');
    }
    // Product
    public function productCard(){
        return view('admin/product/cards-basic');
    }
}
