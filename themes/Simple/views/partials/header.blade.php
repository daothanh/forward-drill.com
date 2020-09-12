<div class="ui left vertical inverted sidebar labeled icon menu">
    <a class="item" href="/"><i class="home icon"></i>Home</a>
    <a class="item" href="#"><i class="leaf icon"></i>Contcts</a>
    <a class="item" href="#"><i class="list layout icon"></i>Horizontal Directional Drill Rigs</a>
    <a class="item" href="#"><i class="block layout icon"></i>Multifunctional Slanted Drilling Equipment</a>
    <a class="item" href="#"><i class="block layout icon"></i>Coring Drill Rig</a>
    <a class="item" href="#"><i class="block layout icon"></i>Water Well Drill Rig</a>
    <a class="item" href="#"><i class="leaf icon"></i>Drill Tools</a>
</div>
<div class="pusher">
    <div class="logo_box ui text stackable menu">
        <div class="ui container">
            <div class="header item"><a class="active item" href="/"><i class="mainlogo"></i></a></div>
            <div class="right menu">
                <a href="tel:88003502026" class="item"><i class="text telephone icon"></i>+7 843 590 14 11</a>
                <a href="" class="item"><i class="mail icon"></i> <span class="__cf_email__" data-cfemail="">[email&#160;protected]</span></a>
            </div>
        </div>
    </div>
    <div class="ui wrapper container segment">
        <header id="header">
            <div class="head owl-carousel owl-theme ui ">
                <div class="item dimmable image">
                    <div class="ui dimmer"><div class="content"><div class="center"><a href="#" class="ui inverted compact btn">Подробнее</a></div></div></div>
                    <img class="ui image" src="{{ Theme::url('images/1.jpg') }}" />
                </div>
                <div class="item dimmable image">
                    <div class="ui dimmer"><div class="content"><div class="center"><a href="#" class="ui inverted compact btn">Подробнее</a></div></div></div>
                    <img class="ui image" src="/uploads/2.jpg" />
                </div>
                <div class="item dimmable image">
                    <div class="ui dimmer"><div class="content"><div class="center"><a href="#" class="ui inverted compact btn">Подробнее</a></div></div></div>
                    <img class="ui image" src="/uploads/3.jpg" />
                </div>
                <div class="item dimmable image">
                    <div class="ui dimmer"><div class="content"><div class="center"><a href="#" class="ui inverted compact btn">Подробнее</a></div></div></div>
                    <img class="ui image" src="/uploads/4.jpg" />
                </div>
                <div class="item dimmable image">
                    <div class="ui dimmer"><div class="content"><div class="center"><a href="#" class="ui inverted compact btn">Подробнее</a></div></div></div>
                    <img class="ui image" src="/uploads/5.jpg" />
                </div>
            </div>
        </header>
    </div>
        <!-- Top Menu -->
        <nav class="nav ui inverted  red pointing menu styckey">
            <div class="ui container">
                <a class="ui large label toc"><i class="sidebar icon"></i>...</a>
                <a class="item" href="/"><i class="home icon"></i></a>
                <div class="ui pointing link dropdown item"><i class="tasks icon"></i>Products<i class="dropdown icon"></i>
                    <div class="menu">
                        <a href="https://forward-drill.com/hdd-rig/" class="item"><i class="edit icon"></i> Horizontal Directional Drill Rig</a>
                        <a href="/multifunctional-slanted-drilling-equipment/" class="item"><i class="edit icon"></i> Multifunctional Slanted Drill Rig</a>
                        <a href="https://forward-drill.com/coring-drill-equipment/" class="item"><i class="edit icon"></i> Coring Drill Rig</a>
                        <a href="https://forward-drill.com/forward-groupwater-well-drill-equipment/" class="item"><i class="edit icon"></i> Water Well Drill Rig</a>
                        <a href="https://forward-drill.com/multifunction-top-drive-drilling-equipment/" class="item"><i class="edit icon"></i> Multifunction Top Drive Drill Rig</a>
                        <a href="https://forward-drill.com/workover-drilling-rig/" class="item"><i class="edit icon"></i> Workover Rig</a>
                        <a class="item" href="https://forward-drill.com/drill-tools/"><i class="list layout icon"></i>Drill Tools</a>
                        <a class="item" href="https://forward-drill.com/consumables/"><i class="list layout icon"></i>Copper Graphite Grease</a>
                        <a class="item" href="https://forward-drill.com/mud-regeneration-system/"><i class="list layout icon"></i>Mud Regeneration System</a>
                        <a class="item" href="https://forward-drill.com/selection-of-the-hdd-equipment.html"><i class="list layout icon"></i>Choose Your FORWARD</a>
                    </div>
                </div>

                <div class="ui pointing link dropdown item"><i class="info icon"></i>About Us<i class="dropdown icon"></i>
                    <div class="menu">
                        <a href="/about/27-o-zavode.html" class="item"><i class="edit icon"></i>About Factory</a>
                        <a href="/about/26-servisnoe-obsluzhivanie-i-konsalting.html" class="item"><i class="edit icon"></i> Guarantee</a>
                        <a href="/about/32-litsenzii-i-sertifikaty.html" class="item"><i class="edit icon"></i> Certificates</a>
                        <a href="https://forward-drill.com/reviews/" class="item"><i class="edit icon"></i> Сustomer Feedback</a>
                        <a href="/about/faqs/" class="item"><i class="edit icon"></i> FAQs</a>
                        <a href="https://forward-drill.com/media-about-us/" class="item"><i class="edit icon"></i> Mass Media About Us</a>
                        <a href="https://forward-drill.com/reviews/" class="item"><i class="edit icon"></i> Reviews</a>
                        <a href="/about/29-tehnologiya-gnb.html" class="item"><i class="edit icon"></i> HDD Technology</a>
                        <a href="/directional-drilling-blog/" class="item"><i class="edit icon"></i> Directional Drilling Blog</a>
                    </div>
                </div>
                <?php $operationCategory = app(\Modules\Blog\Repositories\CategoryRepository::class)->find(11); ?>
                @if($operationCategory)
                    <a class="item" href="{{ $operationCategory->getUrl() }}"><i class="edit icon"></i> {{$operationCategory->name}}</a>
                @endif
                <?php $operationCategory = app(\Modules\Blog\Repositories\CategoryRepository::class)->find(12); ?>
                @if($operationCategory)
                <a class="item" href="{{ $operationCategory->getUrl() }}"><i class="edit icon"></i> {{$operationCategory->name}}</a>
                @endif
                <a class="item" href="/feedback"><i class="mail outline icon"></i>Contacts</a>
                <div class="item share">
                    <a href="http://www.forward-benelux.lu" rel="external nofollow" target="_blank"><img src="/uploads/Germany-150x150.png" title="Germany" width="28px"/></a>
                    <a href="http://www.forward-benelux.nl" rel="external nofollow" target="_blank"><img src="/uploads/Netherlands-150x150.png" title="Netherlands" width="28px"/></a>
                    <a href="http://hddyataysondaj.com/Product.aspx" rel="external nofollow" target="_blank"><img src="/uploads/Turkey-150x150.png" title="Turkey" width="28px"/></a>
                    <a href="http://portugal.forward-corp.com" rel="external nofollow" target="_blank"><img src="/uploads/portugal.png" title="Portugal" width="28px"/></a>
                    <a href="https://forward-gnb.ru/" rel="external nofollow" target="_blank"><img src="/uploads/Russia-150x150.png" title="Russia" width="28px"/></a>
                    <a href="http://spain.forward-corp.com" rel="external nofollow" target="_blank"><img src="/uploads/spain.png" title="Spain" width="28px"/></a>
                </div>
            </div>
        </nav>
</div>
