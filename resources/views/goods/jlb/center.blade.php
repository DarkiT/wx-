<body style="">
<div class="audit-1">
    <div class="bw-title">{{$goods['goods_title']}}</div>
    <div class="swiper-container swiper-container-horizontal" style="cursor: grab;">
        <div class="swiper-wrapper" style="transform: translate3d(-1500px, 0px, 0px); transition-duration: 0ms;">
            @foreach($goods['wheel_photo'] as $wheel)
                <div class="swiper-slide" style="width: 750px;">
                    <img src="{{$wheel}}" alt="">
                </div>
            @endforeach
        </div>
    </div>
    <script language="javascript">
        var mySwiper = new Swiper('.swiper-container', {
            loop: false,
            grabCursor: true,
            paginationClickable: true,
            autoplay: 5000
        })
    </script>
    <div class="bw-buy-bg">
        <div class="bw-price"><em>¥{{$goods['meals'][0]['meal_price']}}</em><span></span></div>
        <div class="bw-buy"><a href="javascript:;" class="newbuy">立即购买</a></div>
    </div>

    <div class="c"></div>
    <div class="bw-content"></div>
    <div class="c"></div>
    <form>
        {{--套餐名称--}}
        <input type="hidden" name="meal_name" value="{{$goods['meals'][0]['meal_name']}}">
        {{--商品Id--}}
        <input type="hidden" name="goods_id" value="{{$goods['id']}}">
        {{--客户来源--}}
        <input type="hidden" name="source" value="{{$source}}">
        {{--尺码信息 默认1--}}
        {{--<input type="hidden" name="size_name" value="{{$goods['size'][0]['size_name'] ?? ""}}">--}}
        {{--单个单价 默认1--}}
        <input type="hidden" name="meal_price" value="{{$goods['meals'][0]['meal_price']}}">
        {{--商品库存 默认1--}}
        <input type="hidden" name="meal_stock" value="{{$goods['meals'][0]['meal_stock']}}">
        {{--付款方式 默认货到付款--}}
        <input type="hidden" name="paytype" value="huodao">
        {{--默认订购数量 1--}}
        <input type="hidden" name="num" value="1">
        <div class="bwtitle" id="buy">在线快速订购</div>
        <div class="main-bg">
            <div class="main">
                <!--单选-->
                <dl class="dl">
                    <dt class="ptop-6">套餐：</dt>
                    <dd>
                        <ul class="pro">
                            @foreach($goods['meals'] as $meal)
                                @if($loop->first)
                                    <li class="ul-no"
                                        onclick="pro(this,'{{$meal['meal_price']}}','{{$meal['meal_name']}}')">
                                        {{$meal['meal_name']}}
                                    </li>
                                @else
                                    <li onclick="pro(this,'{{$meal['meal_price']}}','{{$meal['meal_name']}}')">
                                        {{$meal['meal_name']}}
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </dd>
                </dl>
                <dl class="dl">
                    <dt>金额</dt>
                    <dd class="ptop-6">
                        <strong>¥  <em id="showprice">{{$goods['meals'][0]['meal_price']}}</em></strong>
                    </dd>
                </dl>
            </div>
        </div>
        <div class="main-bg">
            <div class="main">
                <dl class="dl">
                    <dt>姓名</dt>
                    <dd><input name="name" type="text" placeholder="请填写姓名"></dd>
                </dl>
                <dl class="dl">
                    <dt>手机号码</dt>
                    <dd><input name="phone" type="tel" maxlength="11" placeholder="请填写手机号码"></dd>
                </dl>
                <dl class="dl">
                    <dt>所在地区</dt>
                    <dd>
                        <select id="s_province" name="province">
                            <option value="">选择省份</option>
                            <option value="北京市">北京市</option>
                            <option value="天津市">天津市</option>
                            <option value="河北省">河北省</option>
                            <option value="山西省">山西省</option>
                            <option value="内蒙古自治区">内蒙古自治区</option>
                            <option value="辽宁省">辽宁省</option>
                            <option value="吉林省">吉林省</option>
                            <option value="黑龙江省">黑龙江省</option>
                            <option value="上海市">上海市</option>
                            <option value="江苏省">江苏省</option>
                            <option value="浙江省">浙江省</option>
                            <option value="安徽省">安徽省</option>
                            <option value="福建省">福建省</option>
                            <option value="江西省">江西省</option>
                            <option value="山东省">山东省</option>
                            <option value="河南省">河南省</option>
                            <option value="湖北省">湖北省</option>
                            <option value="湖南省">湖南省</option>
                            <option value="广东省">广东省</option>
                            <option value="广西壮族自治区">广西壮族自治区</option>
                            <option value="海南省">海南省</option>
                            <option value="重庆市">重庆市</option>
                            <option value="四川省">四川省</option>
                            <option value="贵州省">贵州省</option>
                            <option value="云南省">云南省</option>
                            <option value="西藏自治区">西藏自治区</option>
                            <option value="陕西省">陕西省</option>
                            <option value="甘肃省">甘肃省</option>
                            <option value="青海省">青海省</option>
                            <option value="宁夏回族自治区">宁夏回族自治区</option>
                            <option value="新疆维吾尔自治区">新疆维吾尔自治区</option>
                            <option value="香港特别行政区">香港特别行政区</option>
                            <option value="澳门特别行政区">澳门特别行政区</option>
                            <option value="台湾省">台湾省</option>
                            <option value="其它">其它</option>
                        </select>
                        <select id="s_city" name="city">
                            <option value="">选择城市</option>
                        </select>
                        <select id="s_county" name="area">
                            <option value="">选择地区</option>
                        </select>
                        <script class="resources library" src="css/goods/jlb/PCASClass.js"
                                type="text/javascript"></script>
                        <script language="javascript" defer="">
                            new PCAS("province", "city", "area");
                        </script>
                    </dd>
                </dl>
                <dl class="dl">
                    <dt>详细地址</dt>
                    <dd><input name="address" type="text" placeholder="请填写详细地址"></dd>
                </dl>
                <dl class="dl">
                    <dt>留言</dt>
                    <dd><textarea placeholder="请尽快安排发货，送货之前手机联系，谢谢！" class="textarea" name="message"></textarea></dd>
                </dl>
                <dl class="dl">
                    <dt>付款方式</dt>
                    <dd id="pay">
                        <b class="huodao b-no" pay="huodao">货到付款</b></dd>
                    <p id="s-huodao" class="dis-show">温馨提示：选择货到付款在家等快递公司送货上门，先验货后付款！</p></dl>
            </div>
        </div>
    </form>