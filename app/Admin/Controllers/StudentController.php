<?php

namespace App\Admin\Controllers;

use App\Student;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class StudentController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Student);


        $grid->column('id')->sortable();
        $grid->student_name('Student name');
        $grid->student_code('Student code');
        $grid->student_login('Student login');
        $grid->prepays('订单数')->display(function ($prepays) {
            $count = count($prepays);
            return $count;
        });
        $grid->letter('Letter');
        $grid->avatar('Avatar');
		$grid->gender()->using(['2' => '女', '1' => '男','0' => '未知']);
        $grid->idcard('Idcard');
        $grid->address('Address');
        $grid->mobile('Mobile');
        $grid->school('School');
        $grid->parent_name('Parent name');
        $grid->parent_mobile('Parent mobile');
        $grid->gradelevel('Gradelevel');
        $grid->grade('Grade');
        $grid->city('City');
        $grid->campus('Campus');
        $grid->assistant('Assistant');
        $grid->remark('Remark');
        $grid->last_class_time('Last class time');
        $studentStatus = ['在读','停课','结课','退课','封存'];
        $grid->column ('status')->display (function ($status) use ($studentStatus) {
        		return empty($studentStatus[$status]) ? '' : $studentStatus[$status];
		});
        $grid->parent_mobile2('Parent mobile2');
        $grid->parent_name2('Parent name2');
        $grid->first_ymd('First ymd');
        $grid->first_class_time('First class time');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Student::findOrFail($id));

        $show->id('Id');
        $show->student_code('Student code');
        $show->student_name('Student name');
        $show->letter('Letter');
        $show->avatar('Avatar');
        $show->gender('Gender');
        $show->idcard('Idcard');
        $show->address('Address');
        $show->mobile('Mobile');
        $show->school('School');
        $show->parent_name('Parent name');
        $show->parent_mobile('Parent mobile');
        $show->gradelevel('Gradelevel');
        $show->grade('Grade');
        $show->city('City');
        $show->campus('Campus');
        $show->assistant('Assistant');
        $show->remark('Remark');
        $show->last_class_time('Last class time');
        $show->status('Status');
        $show->payee('Payee');
        $show->bank('Bank');
        $show->sub_branch('Sub branch');
        $show->bank_card('Bank card');
        $show->parent_mobile2('Parent mobile2');
        $show->parent_name2('Parent name2');
        $show->first_assistant('First assistant');
        $show->first_ymd('First ymd');
        $show->lesson_mode('Lesson mode');
        $show->first_class_time('First class time');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Student);
        $form->text('student_name', 'Student name');
        $form->text('passwd', 'Passwd');
        $form->number('gender', 'Gender');
        $form->text('idcard', 'Idcard');
        $form->text('address', 'Address');
        $form->mobile('mobile', 'Mobile');
        $form->text('school', 'School');
        $form->text('parent_name', 'Parent name');
        $form->text('parent_mobile', 'Parent mobile');
        $form->number('city', 'City');
        $form->number('campus', 'Campus');
        $form->textarea('remark', 'Remark');
        $form->number('status', 'Status');
        $form->text('bank', 'Bank');
        $form->text('sub_branch', 'Sub branch');
        $form->text('bank_card', 'Bank card');
        $form->text('parent_mobile2', 'Parent mobile2');
        $form->text('parent_name2', 'Parent name2');

        return $form;
    }
}
