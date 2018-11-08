<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrepaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prepays', function (Blueprint $table) {
            $table->increments('id');
            $table->string("prepay_no",50)->default('')->comment('流水号');
            $table->integer("student_id")->default(0)->comment("学生ID");
            $table->smallInteger("prepay_type")->default(0)->comment('1充值 2退费');
            $table->decimal("prepay_total",10,2)->default(0)->comment('总额');
            $table->integer("prepay_attachment")->default(0)->comment('附件');
            $table->smallInteger("status")->default(0)->comment('财务审核，0待审核，1审核中，2审核通过');
            $table->integer("cuid")->default(0)->comment('操作人');
            $table->integer("muid")->default(0)->comment('修改人');
            $table->smallInteger("prepay_flag")->default(0)->comment('1:新充 2:续充');
            $table->smallInteger("type")->default(0)->comment('1新签 2续签 3数据矫正  4退费');
            $table->integer("city")->default(0)->comment('城市');
            $table->integer("yj_campus")->default(0)->comment('业绩校区');
            $table->integer("sj_campus")->default(0)->comment('操作校区');
            $table->smallInteger("is_hedan")->default(0)->comment('是否合单: 1是');
            $table->decimal("balance",10,2)->default(0)->comment('退费操作时的当前余额');
            $table->integer("tf_campus")->default(0)->comment('退费校区');
            $table->string("zr_userid",50)->default('')->comment('责任人');
            $table->smallInteger("xz_status")->default(0)->comment('校长状态 1待审核 2已通过');
            $table->smallInteger("kf_status")->default(0)->comment('客服状态 1待审核 2已通过');
            $table->smallInteger("cw_status")->default(0)->comment('财务状态 1待审核 2已通过');
            $table->smallInteger("city_status")->default(0)->comment('分公司审核状态 : 2已审核');
            $table->json("xz_data")->nullable()->comment('校长数据');
            $table->json("kf_data")->nullable()->comment('客服数据');
            $table->json("cw_data")->nullable()->comment('财务数据');
            $table->json("city_data")->nullable()->comment('分公司审核数据');
            $table->integer("ymd")->default(0)->comment('充值或者退费时的：年月日');
            $table->smallInteger("is_market")->default(0)->comment('是否分配  1未分配 2 已分配');
            $table->string("reason",200)->default('')->comment('理由');
            $table->mediumInteger("source_from")->default(0)->comment('充值来源');
            $table->integer("prepay_time")->default(0)->comment('签单时间');
            $table->integer("payee")->default(0)->comment('收款人');
            $table->smallInteger("payment_status")->default(0)->comment('支付状态: 1已支付 2待支付 3已关闭');
            $table->string("tradeno",32)->default(0)->comment("银联内部订单号");
            $table->text("refund_keishi")->nullable()->comment('退费课时');
            $table->smallInteger("tuifei_flag")->default(0)->comment('退费类型 1新签退费 2续费退费');
            $table->smallInteger("tuifei_type")->default(0)->comment('1全额退款 2部分退款');
            $table->integer("assistant")->default(0)->comment('退费操作，当前学管师');
            $table->string("prepay_number",50)->default('')->comment('报名凭证号');
            $table->smallInteger("prepay_grade")->default(0)->comment('学生年级');
            $table->decimal("review_refunds",10,2)->default(0)->comment('审核退款金额');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prepays');
    }
}
