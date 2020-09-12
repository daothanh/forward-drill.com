@extends('simple::layouts.master')
@section('content')
{{--    <section id="custom">--}}
{{--        <div class="ui column stackable grid">--}}
{{--            <div class="row">--}}
{{--                <div class="eight wide column">--}}
{{--                    <div class="ui piled ">--}}
{{--                        <h1>FORWARD GROUP</h1>--}}
{{--                        <p>FORWARD GROUP is an international company designing and producing underground drill rigs. The mission of the company is to provide high-quality drilling equipment and related services.--}}
{{--                        </p>--}}
{{--                        <p>FORWARD GROUP mainly produces:</p>--}}

{{--                        <ul>--}}
{{--                            <li>Horizontal Directional Drill Rig</li>--}}
{{--                            <li>Multifunctional Slanted Drill Rig</li>--}}
{{--                            <li>Multifunction Top Drive Drill Rig</li>--}}
{{--                            <li>Coring Drill Rig</li>--}}
{{--                            <li>Water Well Drill Rig</li>--}}
{{--                            <li>Auxiliary drill tools and spare parts</li>--}}
{{--                        </ul>--}}
{{--                        <p>The company pays a lot of attention to the technical innovations and products development. We have design and engineering teams in Germany, Australia, Russia and China.</p>--}}
{{--                        <p>FORWARD GROUP provides:</p>--}}
{{--                        <ul>--}}
{{--                            <li>High Quality Drilling Equipment</li>--}}
{{--                            <li>Full Technical Support and Service</li>--}}
{{--                            <li>Spare parts, Drill Tools and Consumable Materials</li>--}}
{{--                            <li>Training and Consulting Services</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="eight wide column">--}}
{{--                    <div class="ui piled ">--}}
{{--                        <div class="row">--}}
{{--                            <a href="https://trenchlessasia.com/" target="_blank">--}}
{{--                                <img src="{{ asset('/images/angl-s-logo.png') }}">--}}
{{--                            </a>--}}
{{--                            <br><br>--}}
{{--                            <div>--}}
{{--                                <p>		Welcome to visit our booth No22 at TRENCHLESS ASIA 2019 in Jakarta,--}}
{{--                                    Indonesia, on 17-18 July 2019. The 11th event in this series visits Indonesia--}}
{{--                                    for the first time.--}}
{{--                                </p>--}}
{{--                                <p>--}}
{{--                                    TRENCHLESS ASIA 2019 is an important event for Indonesia,--}}
{{--                                    experts from all over the world will educate, inform and raise awareness of how--}}
{{--                                    Trenchless Technology is the Infrastructure and Drilling Technology of the Future.--}}
{{--                                    FORWARD is a Platinum Sponsor of the event.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}



{{--        <div class="ui three column stackable grid">--}}
{{--            <h2>DRILLING EQUIPMENT</h2>--}}
{{--            <div class="stretched row">--}}

{{--                <div class="column">--}}
{{--                    <a class="ui fluid raised link teal card" href="https://forward-drill.com/hdd-rig/" alt="HDD Rig" title="Horizontal Directional Drill Rig">--}}
{{--                        <div class="content">--}}
{{--                            <div class="header">Horizontal Directional Drill Rig</div>--}}
{{--                        </div>--}}
{{--                        <div class="content">--}}
{{--                            <img class="ui medium image" src="{{ asset('/images/rx-11-44.jpg') }}">--}}
{{--                            <div class="description">FORWARD HDD machines has been carefully designed and manufactured by engineers from Russia, Germany. FORWARD HDD rigs have exclusive power; the operation of rigs on real sites has shown that for many specifications actual values exceed the nominal ones. Special functions of thrust force and rotation acceleration significantly increase the efficiency of work.</div>--}}
{{--                        </div>--}}
{{--                        <div class="ui bottom attached btn">--}}
{{--                            <i class="shop icon"></i> read more...--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--                <div class="column">--}}
{{--                    <a class="ui fluid raised link teal card" href="https://forward-drill.com/multifunctional-slanted-drilling-equipment/">--}}
{{--                        <div class="content">--}}
{{--                            <div class="header">Multifunctional Slanted Drill Rig</div>--}}
{{--                        </div>--}}
{{--                        <div class="content">--}}
{{--                            <img class="ui medium image" src="{{ asset('/images/nnb.jpg') }}">--}}
{{--                            <div class="description">FORWARD GROUP represent a new product FORWARD RX250×900V for drilling inclined wells at an angle of 12˚-60˚. Drilling equipment with inclined adjustable mast, thrust-pullback force – 250 tons, perfect for the construction of horizontal, directional and vertical wells..<br><br><br></div>--}}
{{--                        </div>--}}
{{--                        <div class="ui bottom attached btn">--}}
{{--                            <i class="shop icon"></i> read more...--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--                <div class="column">--}}
{{--                    <a class="ui fluid raised link teal card" href="https://forward-drill.com/coring-drill-equipment/">--}}
{{--                        <div class="content">--}}
{{--                            <div class="header">Coring Drill Rig</div>--}}
{{--                        </div>--}}
{{--                        <div class="content">--}}
{{--                            <img class="ui medium image" src="{{ asset('/images/coring-drill.jpg') }}">--}}
{{--                            <div class="description">Coring Drill Rig is designed for the exploration of solid minerals. FORWARD Coring Drill Rigs C series are compact and equipped with a lot of useful and practical functions. Careful designing and strict quality control guarantee excellent technical parameters and high degree of reliability of FORWARD coring drill rigs of C series.<br><br></div>--}}
{{--                        </div>--}}
{{--                        <div class="ui bottom attached btn">--}}
{{--                            <i class="shop icon"></i> read more...--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--                <div class="column">--}}
{{--                    <a class="ui fluid raised link teal card" href="https://forward-drill.com/forward-groupwater-well-drill-equipment/">--}}
{{--                        <div class="content">--}}
{{--                            <div class="header">Water Well Drill Rig</div>--}}
{{--                        </div>--}}
{{--                        <div class="content">--}}
{{--                            <img class="ui medium image" src="{{ asset('/images/water.jpg') }}">--}}
{{--                            <div class="description">Hydraulic Drill Rig for water is designed to work in a various types of soil and temperature conditions. Self-propelled, on a track. Advantages of the FORWARD Water Well drill rig: ease of use, high drilling efficiency, reliability and safety.<br><br><br></div>--}}
{{--                        </div>--}}
{{--                        <div class="ui bottom attached btn">--}}
{{--                            <i class="shop icon"></i> read more...--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--                <div class="column">--}}
{{--                    <a class="ui fluid raised link teal card" href="https://forward-drill.com/multifunction-top-drive-drilling-equipment/">--}}
{{--                        <div class="content">--}}
{{--                            <div class="header">Multifunctional Top Drive Drill Rig</div>--}}
{{--                        </div>--}}
{{--                        <div class="content">--}}
{{--                            <img class="ui medium image" src="{{ asset('/images/multifunctional.jpg') }}">--}}
{{--                            <div class="description">TDR-50 is mainly used for coal bed methane exploration, water well drilling, rescue well drilling, shallow oil and gas, mine exploration drilling etc. The TDR-50 multifunction top drive rig enables each user to drill with following methods, with borehole diameters of 4″(108 mm) to 47″(1 200mm) and drilling depths up to 1500m.</div>--}}
{{--                        </div>--}}
{{--                        <div class="ui bottom attached btn">--}}
{{--                            <i class="shop icon"></i> read more...--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--                <div class="column">--}}
{{--                    <a class="ui fluid raised link teal card" href="https://forward-drill.com/drill-tools/">--}}
{{--                        <div class="content">--}}
{{--                            <div class="header">Drill Tools and Consumables</div>--}}
{{--                        </div>--}}
{{--                        <div class="content">--}}
{{--                            <img class="ui medium image" src="{{ asset('/images/drill-tools.jpg') }}">--}}
{{--                            <div class="description">FORWARD GROUP provides different drill tools, spare parts and consumables for HDD machines, water well drill rigs, coring drill rigs and Multifunctional drill rigs.<br><br><br><br><br></div>--}}
{{--                        </div>--}}
{{--                        <div class="ui bottom attached btn">--}}
{{--                            <i class="shop icon"></i> read more...--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


{{--        <div class="ui three column divided stackable grid segment">--}}
{{--            <h2>FORWARD NEWS</h2>--}}
{{--            <div class="row">--}}
{{--                <div class="column">--}}
{{--                    <a href="https://forward-drill.com/news/227-one-belt-and-one-road.html">--}}
{{--                        <p><img class="ui bordered fluid image" src="{{ asset('/images/1566548593_1223.jpg') }}"></p>--}}
{{--                        <h3>“One Belt and One Road"</h3>--}}
{{--                    </a>--}}
{{--                    <p>Date: 23/08/2019</p>--}}
{{--                    <p>FORWARD RX40x160 HDD rig has proved itself excellently during the drilling works at one of the construction sites on Bali Island (Indonesia)</p>--}}

{{--                </div>--}}
{{--                <div class="column">--}}
{{--                    <a href="https://forward-drill.com/news/226-forward-in-trenchless-asia-2019-jakarta-indonesia.html">--}}
{{--                        <p><img class="ui bordered fluid image" src="{{ asset('/images/1563529810_whatsapp-image-2019-07-17-at-12.26.26.jpeg') }}"></p>--}}
{{--                        <h3>FORWARD in TRENCHLESS ASIA 2019, Jakarta, Indonesia</h3>--}}
{{--                    </a>--}}
{{--                    <p>Date: 19/07/2019</p>--}}
{{--                    <p>FORWARD&nbsp;is one of the largest suppliers of HDD drilling rigs in this area.</p>--}}

{{--                </div>--}}
{{--                <div class="column">--}}
{{--                    <a href="https://forward-drill.com/news/225-the-most-interesting-exhibitions-in-the-field-of-hdd.html">--}}
{{--                        <p><img class="ui bordered fluid image" src="{{ asset('/images/1562078115_forvard-mal.png') }}"></p>--}}
{{--                        <h3>The most interesting exhibitions in the field of HDD</h3>--}}
{{--                    </a>--}}
{{--                    <p>Date: 02/07/2019</p>--}}
{{--                    <p>The most interesting and large-scale exhibitions in the field of HDD</p>--}}

{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <section id="main">
        <div class="container">
            <div class="row">
                 <div class="col-xs-12 col-md-6">
                     <h1 class="title">FORWARD GROUP</h1>
                     <div class="content-left">
                         <p>FORWARD GROUP is an international company designing and producing underground drill rigs. The mission of the company is to provide high-quality drilling equipment and related services.--}}</p>
                         <p>FORWARD GROUP mainly produces:</p>
                         <ul>
                             <li>Horizontal Directional Drill Rig</li>
                             <li>Multifunctional Slanted Drill Rig</li>
                             <li>Multifunction Top Drive Drill Rig</li>
                             <li>Coring Drill Rig</li>
                             <li>Water Well Drill Rig</li>
                             <li>Auxiliary drill tools and spare parts</li>
                         </ul>
                         <p>The company pays a lot of attention to the technical innovations and products development. We have design and engineering teams in Germany, Australia, Russia and China.</p>
                         <p>FORWARD GROUP provides:</p>
                         <ul>
                             <li>High Quality Drilling Equipment</li>
                             <li>Full Technical Support and Service</li>
                             <li>Spare parts, Drill Tools and Consumable Materials</li>
                             <li>Training and Consulting Services</li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-xs-12 col-md-6">
                     <a href="https://trenchlessasia.com/" target="_blank">
                         <img src="{{ asset('/images/angl-s-logo.png') }}">
                     </a>
                     <br><br>
                     <div>
                         <p>		Welcome to visit our booth No22 at TRENCHLESS ASIA 2019 in Jakarta,
                             Indonesia, on 17-18 July 2019. The 11th event in this series visits Indonesia
                             for the first time.
                         </p>
                         <p>
                             TRENCHLESS ASIA 2019 is an important event for Indonesia,
                             experts from all over the world will educate, inform and raise awareness of how
                             Trenchless Technology is the Infrastructure and Drilling Technology of the Future.
                             FORWARD is a Platinum Sponsor of the event.
                         </p>
                     </div>
                 </div>
             </div>
            <div class="product">
                <h2>DRILLING EQUIPMENT</h2>
                <div class="row">
                    <div class="col-xs-12 col-md-4 item-product">

                            <a class="ui fluid raised link teal card" href="https://forward-drill.com/multifunction-top-drive-drilling-equipment/">
                                <div class="content">
                                    <div class="header">Multifunctional Top Drive Drill Rig</div>
                                </div>
                                <div class="content">
                                    <img class="ui medium image" src="{{ asset('/images/multifunctional.jpg') }}">
                                    <div class="description">TDR-50 is mainly used for coal bed methane exploration, water well drilling, rescue well drilling, shallow oil and gas, mine exploration drilling etc. The TDR-50 multifunction top drive rig enables each user to drill with following methods, with borehole diameters of 4″(108 mm) to 47″(1 200mm) and drilling depths up to 1500m.</div>
                                </div>
                                <div class="ui bottom attached btn">
                                    <i class="shop icon"></i> read more...
                                </div>
                            </a>
                    </div>
                    <div class="col-xs-12 col-md-4 item-product">
                        <a class="ui fluid raised link teal card" href="https://forward-drill.com/multifunctional-slanted-drilling-equipment/">
                            <div class="content">
                                <div class="header">Multifunctional Slanted Drill Rig</div>
                            </div>
                            <div class="content">
                                <img class="ui medium image" src="{{ asset('/images/nnb.jpg') }}">
                                <div class="description">FORWARD GROUP represent a new product FORWARD RX250×900V for drilling inclined wells at an angle of 12˚-60˚. Drilling equipment with inclined adjustable mast, thrust-pullback force – 250 tons, perfect for the construction of horizontal, directional and vertical wells..<br><br><br></div>
                            </div>
                            <div class="ui bottom attached btn">
                                <i class="shop icon"></i> read more...
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-md-4 item-product">
                        <a class="ui fluid raised link teal card" href="https://forward-drill.com/coring-drill-equipment/">
                            <div class="content">
                                <div class="header">Coring Drill Rig</div>
                            </div>
                            <div class="content">
                                <img class="ui medium image" src="{{ asset('/images/coring-drill.jpg') }}">
                                <div class="description">Coring Drill Rig is designed for the exploration of solid minerals. FORWARD Coring Drill Rigs C series are compact and equipped with a lot of useful and practical functions. Careful designing and strict quality control guarantee excellent technical parameters and high degree of reliability of FORWARD coring drill rigs of C series.<br><br></div>
                            </div>
                            <div class="ui bottom attached btn">
                                <i class="shop icon"></i> read more...
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-md-4 item-product">
                        <a class="ui fluid raised link teal card" href="https://forward-drill.com/multifunction-top-drive-drilling-equipment/">
                            <div class="content">
                                <div class="header">Multifunctional Top Drive Drill Rig</div>
                            </div>
                            <div class="content">
                                <img class="ui medium image" src="{{ asset('/images/multifunctional.jpg') }}">
                                <div class="description">TDR-50 is mainly used for coal bed methane exploration, water well drilling, rescue well drilling, shallow oil and gas, mine exploration drilling etc. The TDR-50 multifunction top drive rig enables each user to drill with following methods, with borehole diameters of 4″(108 mm) to 47″(1 200mm) and drilling depths up to 1500m.</div>
                            </div>
                            <div class="ui bottom attached btn">
                                <i class="shop icon"></i> read more...
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-md-4 item-product">
                        <a class="ui fluid raised link teal card" href="https://forward-drill.com/multifunctional-slanted-drilling-equipment/">
                            <div class="content">
                                <div class="header">Multifunctional Slanted Drill Rig</div>
                            </div>
                            <div class="content">
                                <img class="ui medium image" src="{{ asset('/images/nnb.jpg') }}">
                                <div class="description">FORWARD GROUP represent a new product FORWARD RX250×900V for drilling inclined wells at an angle of 12˚-60˚. Drilling equipment with inclined adjustable mast, thrust-pullback force – 250 tons, perfect for the construction of horizontal, directional and vertical wells..<br><br><br></div>
                            </div>
                            <div class="ui bottom attached btn">
                                <i class="shop icon"></i> read more...
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-md-4 item-product">
                        <a class="ui fluid raised link teal card" href="https://forward-drill.com/coring-drill-equipment/">
                            <div class="content">
                                <div class="header">Coring Drill Rig</div>
                            </div>
                            <div class="content">
                                <img class="ui medium image" src="{{ asset('/images/coring-drill.jpg') }}">
                                <div class="description">Coring Drill Rig is designed for the exploration of solid minerals. FORWARD Coring Drill Rigs C series are compact and equipped with a lot of useful and practical functions. Careful designing and strict quality control guarantee excellent technical parameters and high degree of reliability of FORWARD coring drill rigs of C series.<br><br></div>
                            </div>
                            <div class="ui bottom attached btn">
                                <i class="shop icon"></i> read more...
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-md-4 item-product">
                        <a class="ui fluid raised link teal card" href="https://forward-drill.com/multifunction-top-drive-drilling-equipment/">
                            <div class="content">
                                <div class="header">Multifunctional Top Drive Drill Rig</div>
                            </div>
                            <div class="content">
                                <img class="ui medium image" src="{{ asset('/images/multifunctional.jpg') }}">
                                <div class="description">TDR-50 is mainly used for coal bed methane exploration, water well drilling, rescue well drilling, shallow oil and gas, mine exploration drilling etc. The TDR-50 multifunction top drive rig enables each user to drill with following methods, with borehole diameters of 4″(108 mm) to 47″(1 200mm) and drilling depths up to 1500m.</div>
                            </div>
                            <div class="ui bottom attached btn">
                                <i class="shop icon"></i> read more...
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-md-4 item-product">
                        <a class="ui fluid raised link teal card" href="https://forward-drill.com/multifunctional-slanted-drilling-equipment/">
                            <div class="content">
                                <div class="header">Multifunctional Slanted Drill Rig</div>
                            </div>
                            <div class="content">
                                <img class="ui medium image" src="{{ asset('/images/nnb.jpg') }}">
                                <div class="description">FORWARD GROUP represent a new product FORWARD RX250×900V for drilling inclined wells at an angle of 12˚-60˚. Drilling equipment with inclined adjustable mast, thrust-pullback force – 250 tons, perfect for the construction of horizontal, directional and vertical wells..<br><br><br></div>
                            </div>
                            <div class="ui bottom attached btn">
                                <i class="shop icon"></i> read more...
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-md-4 item-product">
                        <a class="ui fluid raised link teal card" href="https://forward-drill.com/coring-drill-equipment/">
                            <div class="content">
                                <div class="header">Coring Drill Rig</div>
                            </div>
                            <div class="content">
                                <img class="ui medium image" src="{{ asset('/images/coring-drill.jpg') }}">
                                <div class="description">Coring Drill Rig is designed for the exploration of solid minerals. FORWARD Coring Drill Rigs C series are compact and equipped with a lot of useful and practical functions. Careful designing and strict quality control guarantee excellent technical parameters and high degree of reliability of FORWARD coring drill rigs of C series.<br><br></div>
                            </div>
                            <div class="ui bottom attached btn">
                                <i class="shop icon"></i> read more...
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
