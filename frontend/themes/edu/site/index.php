<?php
/* @var $this yii\web\View */
$this->title = Yii::$app->name;
use backend\modules\campus\models\ApplyToPlay;
use backend\modules\campus\models\Contact;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\captcha\Captcha;

$model = new ApplyToPlay;
$model->setScenario('AjaxApply');
//var_dump($model->getScenario());exit;
$contact = new Contact;
$contact->setScenario('AjaxContact');
?>
<div class="site-index">
    <div class="home_continer bg_gray col-xs-12">
        <div class="body-content home_title">
            <h3 class="text-center no-padding no-margin">关于瓦酷</h3>
        </div>
        <div class="col-xs-12 margin_bottom no-padding">
            <div class="col-md-6">
                <p>    瓦酷机器人是由北京魔趣教育科技有限公司研发的高端教育品牌。
                是致力于3-13岁青少年的科技教育，让孩子们在“玩中学”，动手拼插 共享创新实践过程,
                体会抽象的理论知识应用在真实的生活中。从而实现拓展思维和提升生存能力。
                瓦酷机器人给中国的孩子们带来最特别的教育！</p>
                 <p>    瓦酷机器人全部应用丹麦的乐高教具。乐高的专利积木产品种类超过2000种、
                 对产品质量要求非常高：模具公差2微米、软硬适度、超过世界上最严格的卫生标准、
                 拼插2万次不松脱。瓦酷机器人相信通过知识延伸，构建思维和21世纪技能的培养，
                 能够让学生积极思考、团队合作，成为终身学习者。！</p>
                 <p>    瓦酷教育学习方案根据不同年龄(3-13岁)特点设计，
                 涉及学科内容包括科学、技术、数学、设计、社会学等，
                 既适用于课堂教学，也可以作为课外活动和技能培训内容。
                 瓦酷机器人将“快乐教学，创意教学”融入企业文化中。
                 是全国机器人教育中发展最快，教育理念最优的教育基地。</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive about_img" src="http://static.v1.wakooedu.com/bell1.png">
            </div>
        </div>
        <div class="col-xs-12 no-padding">
           <div class="col-xs-3">
                <img class="img-responsive about_img" src="http://static.v1.wakooedu.com/chuangzao.png">
            </div>
            <div class="col-xs-3">
                <img class="img-responsive about_img" src="http://static.v1.wakooedu.com/find.png">
            </div>
            <div class="col-xs-3">
                <img class="img-responsive about_img" src="http://static.v1.wakooedu.com/goutong.png">
            </div>
            <div class="col-xs-3">
                <img class="img-responsive about_img" src="http://static.v1.wakooedu.com/jiejue.png">
            </div>
        </div>

        <div class="col-xs-12 knowmore">
            <button class="btn btn-defult more">了解详情</button>
        </div>
    </div>
    <div class="home_continer col-xs-12">
        <div class="body-content home_title">
            <h3 class="text-center no-padding no-margin">瓦酷动态</h3>
        </div>
        <div class="col-md-6 margin_bottom">
            <div class="col-xs-12 margin_bottom home_news">
                <div class="time col-xs-2 no-padding">
                    <h1>18</h1>
                    <p>2017/2</p>
                </div>
                <div class="col-xs-9 news no-padding">
                    <h4>2016年全国机器人等级考试圆满落幕...</h4>
                    <p>12月17日上午9点，2016年第四季度“全国青少年机器人技术等级考试”准时开考...</p>
                </div>
            </div>
            <div class="col-xs-12 margin_bottom home_news">
                <div class="time col-xs-2 no-padding">
                    <h1>18</h1>
                    <p>2017/2</p>
                </div>
                <div class="col-xs-9 news no-padding">
                    <h4>2016年全国机器人等级考试圆满落幕...</h4>
                    <p>12月17日上午9点，2016年第四季度“全国青少年机器人技术等级考试”准时开考...</p>
                </div>
            </div>
            <div class="col-xs-12 margin_bottom home_news">
                <div class="time col-xs-2 no-padding">
                    <h1>18</h1>
                    <p>2017/2</p>
                </div>
                <div class="col-xs-9 news no-padding">
                    <h4>2016年全国机器人等级考试圆满落幕...</h4>
                    <p>12月17日上午9点，2016年第四季度“全国青少年机器人技术等级考试”准时开考...</p>
                </div>
            </div>
            <div class="col-xs-12 margin_bottom home_news">
                <div class="time col-xs-2 no-padding">
                    <h1>18</h1>
                    <p>2017/2</p>
                </div>
                <div class="col-xs-9 news no-padding">
                    <h4>2016年全国机器人等级考试圆满落幕...</h4>
                    <p>12月17日上午9点，2016年第四季度“全国青少年机器人技术等级考试”准时开考...</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 margin_bottom">
            <div class="col-xs-12 margin_bottom home_news">
                <div class="time col-xs-2 no-padding">
                    <h1>18</h1>
                    <p>2017/2</p>
                </div>
                <div class="col-xs-9 news no-padding">
                    <h4>2016年全国机器人等级考试圆满落幕...</h4>
                    <p>12月17日上午9点，2016年第四季度“全国青少年机器人技术等级考试”准时开考...</p>
                </div>
            </div>
            <div class="col-xs-12 margin_bottom home_news">
                <div class="time col-xs-2 no-padding">
                    <h1>18</h1>
                    <p>2017/2</p>
                </div>
                <div class="col-xs-9 news no-padding">
                    <h4>2016年全国机器人等级考试圆满落幕...</h4>
                    <p>12月17日上午9点，2016年第四季度“全国青少年机器人技术等级考试”准时开考...</p>
                </div>
            </div>
            <div class="col-xs-12 margin_bottom home_news">
                <div class="time col-xs-2 no-padding">
                    <h1>18</h1>
                    <p>2017/2</p>
                </div>
                <div class="col-xs-9 news no-padding">
                    <h4>2016年全国机器人等级考试圆满落幕...</h4>
                    <p>12月17日上午9点，2016年第四季度“全国青少年机器人技术等级考试”准时开考...</p>
                </div>
            </div>
            <div class="col-xs-12 margin_bottom home_news">
                <div class="time col-xs-2 no-padding">
                    <h1>18</h1>
                    <p>2017/2</p>
                </div>
                <div class="col-xs-9 news no-padding">
                    <h4>2016年全国机器人等级考试圆满落幕...</h4>
                    <p>12月17日上午9点，2016年第四季度“全国青少年机器人技术等级考试”准时开考...</p>
                </div>
            </div>
        </div>

        <div class="col-xs-12 knowmore">
            <button class="btn btn-defult more">更多内容</button>
        </div>
    </div>
    <div class="home_continer bg_gray col-xs-12">
        <div class="body-content home_title">
            <h3 class="text-center no-padding no-margin">课程体系</h3>
        </div>
        <div class="col-xs-12 text-center course">
            <div class="col-xs-6 text-right no-padding">
                <h4 id="find1" class="text-center yellow_bg pull-right">学前课程（3～6周岁）</h4>
            </div>
            <div class="col-xs-6 text-left no-padding">
                <h4 id="find2" class="text-center">学龄课程（7～13周岁）</h4>
            </div>
        </div>
        <div class="box-body col-xs-12 box1">
            <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <ul class="run_left no-padding pull-left">
                            <li class="col-xs-4 no-padding">
                                <img class="img-responsive about_img" src="http://static.v1.wakooedu.com/11.png">
                                <h4>神奇物理</h4>
                            </li>
                            <li class="col-xs-4 no-padding">
                                <img class="img-responsive about_img" src="http://static.v1.wakooedu.com/22.png">
                                <h4>神奇物理</h4>
                            </li>
                            <li class="col-xs-4 no-padding">
                                <img class="img-responsive about_img" src="http://static.v1.wakooedu.com/33.png">
                                <h4>神奇物理</h4>
                            </li>
                        </ul>
                    </div>
                    <div class="item ">
                        <ul class="run_left no-padding pull-left">
                            <li class="col-xs-4 no-padding">
                                <img class="img-responsive about_img" src="http://static.v1.wakooedu.com/44.png">
                                <h4>神奇物理</h4>
                            </li>
                            <li class="col-xs-4 no-padding">
                                <img class="img-responsive about_img" src="http://static.v1.wakooedu.com/55.png">
                                <h4>神奇物理</h4>
                            </li>
                            <li class="col-xs-4 no-padding">
                                <img class="img-responsive about_img" src="http://static.v1.wakooedu.com/4.png">
                                <h4>神奇物理</h4>
                            </li>
                        </ul>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic1" data-slide="prev">
                    <img class="run_L" src="http://7xthhn.com2.z0.glb.clouddn.com/o_1b8bird5i3cvlph19991rh7pd99.png">
                </a>
                <a class="right carousel-control" href="#carousel-example-generic1" data-slide="next">
                    <img class="run_R" src="http://7xthhn.com2.z0.glb.clouddn.com/o_1b8birilvlcn12bg19usc8r1m3pe.png">
                </a>
            </div>
        </div>
        <div class="box-body col-xs-12 box2">
            <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <ul class="run_right no-padding pull-left">
                            <li class="col-xs-4 no-padding">
                                <img class="img-responsive about_img" src="http://static.v1.wakooedu.com/b.png">
                                <h4>神奇物理</h4>
                            </li>
                            <li class="col-xs-4 no-padding">
                                <img class="img-responsive about_img" src="http://static.v1.wakooedu.com/c.png">
                                <h4>神奇物理</h4>
                            </li>
                            <li class="col-xs-4 no-padding">
                                <img class="img-responsive about_img" src="http://static.v1.wakooedu.com/d.png">
                                <h4>神奇物理</h4>
                            </li>
                        </ul>
                    </div>
                    <div class="item ">
                        <ul class="run_right no-padding pull-left">
                            <li class="col-xs-4 no-padding">
                                <img class="img-responsive about_img" src="http://static.v1.wakooedu.com/e.png">
                                <h4>神奇物理</h4>
                            </li>
                            <li class="col-xs-4 no-padding">
                                <img class="img-responsive about_img" src="http://static.v1.wakooedu.com/f.png">
                                <h4>神奇物理</h4>
                            </li>
                            <li class="col-xs-4 no-padding">
                                <img class="img-responsive about_img" src="http://static.v1.wakooedu.com/g.png">
                                <h4>神奇物理</h4>
                            </li>
                        </ul>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic2" data-slide="prev">
                    <img class="run_L" src="http://7xthhn.com2.z0.glb.clouddn.com/o_1b8bird5i3cvlph19991rh7pd99.png">
                </a>
                <a class="right carousel-control" href="#carousel-example-generic2" data-slide="next">
                    <img class="run_R" src="http://7xthhn.com2.z0.glb.clouddn.com/o_1b8birilvlcn12bg19usc8r1m3pe.png">
                </a>
            </div>
        </div>
    </div>
    <div class="home_continer col-xs-12">
        <div class="body-content home_title">
            <h3 class="text-center no-padding no-margin">作品展示</h3>
        </div>
        <div class="box-body col-xs-12">
            <div id="carousel-example-generic3" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner down_run">
                    <div class="item active">
                        <ul class="no-padding pull-left">
                            <li class="col-xs-4 no-padding">
                                <img class="img-responsive " src="http://static.v1.wakooedu.com/DNS_1.png">
                                <h4>神奇物理</h4>
                                <div class="col-xs-12 no-padding">
                                    <p>
                                        瓦酷机器人是北京魔趣教育科技有限公司旗下品牌，是一个
                                        适合所有有梦想创业者的教育项目。
                                    </p>
                                </div>
                            </li>
                            <li class="col-xs-4 no-padding">
                                <img class="img-responsive " src="http://static.v1.wakooedu.com/DNS_10.png">
                                <h4>神奇物理</h4>
                                <div class="col-xs-12 no-padding">
                                    <p>
                                        瓦酷机器人是北京魔趣教育科技有限公司旗下品牌，是一个
                                        适合所有有梦想创业者的教育项目。
                                    </p>
                                </div>
                            </li>
                            <li class="col-xs-4 no-padding">
                                <img class="img-responsive " src="http://static.v1.wakooedu.com/DNS_12.png">
                                <h4>神奇物理</h4>
                                <div class="col-xs-12 no-padding">
                                    <p>
                                        瓦酷机器人是北京魔趣教育科技有限公司旗下品牌，是一个
                                        适合所有有梦想创业者的教育项目。
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="item ">
                        <ul class="no-padding pull-left">
                            <li class="col-xs-4 no-padding">
                                <img class="img-responsive " src="http://static.v1.wakooedu.com/DNS_13.png">
                                <h4>神奇物理</h4>
                                <div class="col-xs-12 no-padding">
                                    <p>
                                        瓦酷机器人是北京魔趣教育科技有限公司旗下品牌，是一个
                                        适合所有有梦想创业者的教育项目。
                                    </p>
                                </div>
                            </li>
                            <li class="col-xs-4 no-padding">
                                <img class="img-responsive " src="http://static.v1.wakooedu.com/DNS_14.png">
                                <h4>神奇物理</h4>
                                <div class="col-xs-12 no-padding">
                                    <p>
                                        瓦酷机器人是北京魔趣教育科技有限公司旗下品牌，是一个
                                        适合所有有梦想创业者的教育项目。
                                    </p>
                                </div>
                            </li>
                            <li class="col-xs-4 no-padding">
                                <img class="img-responsive " src="http://static.v1.wakooedu.com/DNS_16.png">
                                <h4>神奇物理</h4>
                                <div class="col-xs-12 no-padding">
                                    <p>
                                        瓦酷机器人是北京魔趣教育科技有限公司旗下品牌，是一个
                                        适合所有有梦想创业者的教育项目。
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="item ">
                        <ul class="no-padding pull-left">
                            <li class="col-xs-4 no-padding">
                                <img class="img-responsive " src="http://static.v1.wakooedu.com/DNS_17.png">
                                <h4>神奇物理</h4>
                                <div class="col-xs-12 no-padding">
                                    <p>
                                        瓦酷机器人是北京魔趣教育科技有限公司旗下品牌，是一个
                                        适合所有有梦想创业者的教育项目。
                                    </p>
                                </div>
                            </li>
                            <li class="col-xs-4 no-padding">
                                <img class="img-responsive " src="http://static.v1.wakooedu.com/DNS_4.png">
                                <h4>神奇物理</h4>
                                <div class="col-xs-12 no-padding">
                                    <p>
                                        瓦酷机器人是北京魔趣教育科技有限公司旗下品牌，是一个
                                        适合所有有梦想创业者的教育项目。
                                    </p>
                                </div>
                            </li>
                            <li class="col-xs-4 no-padding">
                                <img class="img-responsive " src="http://static.v1.wakooedu.com/DNS_5.png">
                                <h4>神奇物理</h4>
                                <div class="col-xs-12 no-padding">
                                    <p>
                                        瓦酷机器人是北京魔趣教育科技有限公司旗下品牌，是一个
                                        适合所有有梦想创业者的教育项目。
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic3" data-slide="prev">
                    <img class="run_L" src="http://7xthhn.com2.z0.glb.clouddn.com/o_1b8endvs86j018209191mkpkua9.png">
                </a>
                <a class="right carousel-control" href="#carousel-example-generic3" data-slide="next">
                    <img class="run_R" src="http://7xthhn.com2.z0.glb.clouddn.com/o_1b8enf41d1j8l1ddelf11s4r1abte.png">
                </a>
            </div>
        </div>
    </div>
    <div class="home_continer bg_gray col-xs-12">
        <div class="body-content home_title">
            <h3 class="text-center no-padding no-margin">联系我们</h3>
        </div>
        <div class="col-xs-12 no-padding">
            <div class="col-sm-6 ourinfo">
                <h4 class="text-left">联系方式</h4>
                <p>北京魔趣教育科技有限公司</p>
                <p>公司地址：河北省廊坊市三河市燕郊开发区</p>
                <p>办公电话：0316-8888-888</p>
                <p>网址：www.wakooedu.com</p>
            </div>
            <div class="col-sm-6 ourinfo">
                <h4 class="text-left">在线留言</h4>
               <!--  <input class="col-xs-12" placeholder="请填写您的姓名">
                <input class="col-xs-12" placeholder="请填写您的电话">
                <textarea class="col-xs-12" placeholder="请填写不超过100字的留言"></textarea> -->
                <?php $form = ActiveForm::begin([
                      'id' => 'form']
                )?>
                <?= $form->field($contact,'username')
                ->textInput(['placeholder'=>'请输入您的姓名'])->label(false)->hint(false);?>
                <?=  $form->field($contact,'phone_number')
                ->textInput(['placeholder'=>'请输入您的电话'])->label(false)->hint(false); ?>
                <?= $form->field($contact,'body')->textarea(['placeholder'=>'请填写不超过100字的留言'])->label(false)->hint(false);?>
                
                <?php
                    echo $form->field($contact, 'verifyCode')->widget(Captcha::className(), [
                        'options'=>['placeholder'=>'验证码'],
                        'captchaAction'=>'site/contact_captcha',
                        'template' => '<div class= "body"><div class="col-lg-4 no-padding">{input}</div><div class="col-lg-3">{image}</div></div>',
                        'imageOptions'=>['alt'=>'图片无法加载','title'=>'点击换图', 'style'=>'cursor:pointer'],
                    ])
                ->label(false)->hint(false)  ?>
                <button class="btn btn-defult pull-left col-sm-12 ">提交</button>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
    <div class="address_choose col-xs-12" id="enlist">
      <?php $form = ActiveForm::begin([
              'id' => 'form-id',
              'action' => Url::to(['ajax-apply']),
              //'enableAjaxValidation' => true,
              'enableClientValidation'=>true,
              //'validationUrl' => Url::to(['apply-validate'])
              ]
      )?>
        <h4>瓦酷，创造不一样！</h4>
         <div class="col-sm-12 no-padding">
      
            <div class="form-group">

                 <div class="col-sm-4 no-padding">
                    <?php echo $form->field($model,'province')
                    ->dropDownList([])->hint(false)->label(false)?>
                    <!-- <select name="input_province" id="input_province" class="form-control"></select> -->
                </div>
                <div class="col-sm-4 no-padding">
                    <?php echo $form->field($model,'city')
                    ->dropDownList([])->hint(false)->label(false)?>
                    <!-- <select name="input_city" id="input_city" class="form-control"></select> -->
                </div>
                <div class="col-sm-4 no-padding">
                     <?php echo $form->field($model,'region')
                    ->dropDownList([])->hint(false)->label(false)?>
                   <!--  <select name="input_area" id="input_area" class="form-control"></select> -->
                </div>
            </div>

    </div>
        <div class="col-sm-12 no-padding">
            <?php echo $form->field($model,'username')
            ->textInput(['placeholder'=>'请输入您的姓名'])->label(false)->hint(false) ?>

            <?php echo $form->field($model,'phone_number')
            ->textInput(['placeholder'=>'请输入您的电话'])->label(false)->hint(false) ?>

            <?php echo $form->field($model,'email')
            ->textInput(['placeholder'=>'请输入您的邮箱'])->label(false)->hint(false) ?>

            <?php
               echo $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'options'=>['placeholder'=>'验证码'],
                        'template' => '<div class="row"><div class="col-lg-6">{input}</div><div class="col-lg-6">{image}</div></div>',
                        'imageOptions'=>['alt'=>'图片无法加载','title'=>'点击换图', 'style'=>'cursor:pointer']
                    ])
                ->label(false)->hint(false)  ?>
            <!-- <input class="col-sm-12" placeholder="请输入您的姓名">
            <input class="col-sm-12" placeholder="请输入您的电话">
            <input class="col-sm-12" placeholder="请输入您的邮箱"> -->
        </div>
        <!-- <button  class="btn btn-warning col-sm-12">立即报名</button> -->

        <?= Html::submitButton(
            Yii::t('backend', '立即报名'),
            [
            'id' => 'save-' . $model->formName(),
            'class' => 'btn btn-warning col-sm-12'
            ]);
            ?>
        <?php ActiveForm::end(); ?>
    </div>




<script>
Change();
showfont();
showhide();
function Change(){
    $('.box2').hide();
    $('#find1').mouseenter(function(){
        $('.course h4').removeClass('yellow_bg');
        $(this).addClass('yellow_bg');
        $('.box2').hide();
        $('.box1').show();
    });
    $('#find2').mouseenter(function(){
        $('.course h4').removeClass('yellow_bg');
        $(this).addClass('yellow_bg');
        $('.box1').hide();
        $('.box2').show();
    });
}

function showfont(){
    $('.container').css('margin','0');
    $('.container').css('padding','0');
    $('.container').css('width','100%');
    var H_li = $('.down_run li img').height();
    $('.down_run li div').hide();
    $('.down_run li').hover(function(){
        $(this).children('div').show();
        $(this).children('div').css('height',''+H_li+'');
        $(this).children('div').children('p').css('padding','5%');
    },function(){
        $(this).children('div').hide();
    });

    $(window).resize(function() {
        var H_li = $('.down_run li img').height();
        $('.down_run li div').hide();
        $('.down_run li').hover(function(){
            $(this).children('div').show();
            $(this).children('div').css('height',''+H_li+'');
            $(this).children('div').children('p').css('padding','5%');
        },function(){
            $(this).children('div').hide();
        });
        $('.container').css('margin','0');
        $('.container').css('padding','0');
        $('.container').css('width','100%');
    });
}




$(function () {
    var html = "<option value='0'>== 请选择 ==</option>"; 
    $("#applytoplay-city").append(html); 
    $("#applytoplay-region").append(html);
    $.each(pdata,function(idx,item){
        if (parseInt(item.level) == 0) {
            html += "<option value='" + item.names + "' exid='" + item.code + "'>" + item.names + "</option>";
        }
    });
    $("#applytoplay-province").append(html);

    $("#applytoplay-province").change(function(){
        if ($(this).val() == "0"){
          $("#applytoplay-city option").remove();
          $("#applytoplay-region option").remove();
          var html = "<option value='0'>== 请选择 ==</option>";
          $("#applytoplay-region").append(html);
          $("#applytoplay-city").append(html);
          return;
       }

        $("#applytoplay-city option").remove(); $("#applytoplay-region option").remove();
        var code = $(this).find("option:selected").attr("exid"); code = code.substring(0,2);
        var html = "<option value='0'>== 请选择 ==</option>"; $("#applytoplay-region").append(html);
        $.each(pdata,function(idx,item){
            if (parseInt(item.level) == 1 && code == item.code.substring(0,2)) {
                html += "<option value='" + item.names + "' exid='" + item.code + "'>" + item.names + "</option>";
            }
        });
        $("#applytoplay-city").append(html);      
    });

    $("#applytoplay-city").change(function(){
        if ($(this).val() == "0"){
          $("#applytoplay-region option").remove();
          var html = "<option value='0'>== 请选择 ==</option>";
          $("#applytoplay-region").append(html);
          return;
       }
        $("#applytoplay-region option").remove();
        var code = $(this).find("option:selected").attr("exid"); code = code.substring(0,4);
        var html = "<option value='0'>== 请选择 ==</option>";
        $.each(pdata,function(idx,item){
            if (parseInt(item.level) == 2 && code == item.code.substring(0,4)) {
                html += "<option value='" + item.names + "' exid='" + item.code + "'>" + item.names + "</option>";
            }
        });
        $("#applytoplay-region").append(html);      
    });
    //绑定
    $("#applytoplay-province").val("北京市");$("#applytoplay-province").change();
    $("#applytoplay-city").val("市辖区");$("#applytoplay-city").change();
    $("#applytoplay-region").val("朝阳区");    

});

function showhide(){
    var Width = $(window).width();
    console.log(Width);
    if(Width < 768){
        $('#enlist').removeClass('address_choose');
        $('#enlist').addClass('address_choose1');
    }else {
        $('#enlist').removeClass('address_choose1');
        $('#enlist').addClass('address_choose');
    }
    $(window).resize(function(){
        var Width = $(window).width();
        if(Width < 768){
          $('#enlist').removeClass('address_choose');
          $('#enlist').addClass('address_choose1');
      }else {
          $('#enlist').removeClass('address_choose1');
          $('#enlist').addClass('address_choose');
        }
    });
}

if(navigator.userAgent.match(/mobile/i)) {
    $('#enlist').removeClass('address_choose');
    $('#enlist').addClass('address_choose1');
}


$(document).ready(function () {
        $('body').on('beforeSubmit', 'form#form-id', function () {
            var form = $(this);
            // return false if form still have some validation errors
            if (form.find('.has-error').length) 
            {
                return false;
            }
            // submit form
            $.ajax({
            url    : 'index.php?r=site/ajax-apply',
            type   : 'POST',
            data   : form.serialize(),
            success: function (response) 
            {
                if(response.status){
                    alert('保存成功');
                    $('#enlist input').val('');
                    $.ajax({
                    //使用ajax请求site/captcha方法，加上refresh参数，接口返回json数据
                        url:'<?php echo  Url::to(['site/captcha','refresh'=>1]) ?>',
                        contentType:'application/json; charset=UTF-8',
                        dataType: 'json',
                        cache: false,
                        success: function (data) {
                            $("#applytoplay-verifycode-image").attr('src', data['url']);
                        }
                    });
                }else{
                    alert('保存失败');
                }
            },
            error  : function () 
            {
               alter('网络错误');
            }
            });
            return false;
         });
    });
    
    $(document).ready(function () {
        $('body').on('beforeSubmit', 'form#form', function () {
            var form = $(this);
            // return false if form still have some validation errors
            if (form.find('.has-error').length) 
            {
                return false;
            }
            // submit form
            $.ajax({
            url    : 'index.php?r=site/ajax-contact',
            type   : 'POST',
            data   : form.serialize(),
            success: function (response) 
            {
                if(response.status){
                    alert('保存成功');
                    $('.ourinfo .form-control,input').val('');
                    $.ajax({
                    //使用ajax请求site/captcha方法，加上refresh参数，接口返回json数据
                        url:'<?php echo  Url::to(['site/contact_captcha','refresh'=>1]) ?>',
                        contentType:'application/json; charset=UTF-8',
                        dataType: 'json',
                        cache: false,
                        success: function (data) {
                            $("#contact-verifycode-image").attr('src', data['url']);
                        }
                    });
                }else{
                    alert('保存失败');
                }
            },
            error  : function () 
            {
               alter('网络错误');
            }
            });
            return false;
         });
    });
</script>


