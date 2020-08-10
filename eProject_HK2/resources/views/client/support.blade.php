@extends('layout.layout')
@section('title', 'Support')
@section('page-name', 'Support')
@section('content')
<style>
    .hr {
        margin: 5px 0;
    }

    .accordion-group {
        margin-bottom: 10px;
        border-radius: 0;
    }

    .accordion-toggle {
        background:#979493;

    }

    .accordion-toggle:hover {
        text-decoration: none;

    }

    .accordion-heading .accordion-toggle {
        display: block;
        padding: 8px 15px;
    }

    .selectStyle {
        width: 46%;
        float: left;
        margin-right: 8%;
    }


    .accordion-group {
        margin-bottom: 20px;
    }
</style>
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#gametechnical">Game Technical Issues</a></li>
    <li><a data-toggle="tab" href="#menu1">Orders & Payments</a></li>
    <li><a data-toggle="tab" href="#menu2">Account & Store</a></li>
    <li><a data-toggle="tab" href="#menu3">Downloads & Installing</a></li>
</ul>

<div class="tab-content">
    <div id="gametechnical" class="tab-pane fade in active">
        <h3>Game Technical Issues</h3>
        <p class="text-center">Is a game that you already bought and downloaded not working properly?</p>
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-12">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="toggle" href="#crashing">
                                <i class="fa fa-plus"></i> Crashing in general
                            </a>
                        </div>
                        <div id="crashing" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <div class="container">
                                    <h5>INITIAL TROUBLESHOOTING</h5>
                                    <p>1) Please make sure that you use "Run as Administrator" to install and to start the game (right-click on the shortcut or setup file and select "Run as Administrator").</p>
                                    <p>2) Please reinstall the game AND add it to your antivirus/firewall software exception/trusted list. Simply disabling firewall or AV software could not be enough, since some of these software are running still in background or in services list.</p>
                                    <p>3) Install the June 2010 DirectX runtime package, then use the DirectX web installer, as your current DirectX may have become corrupt over time.</p>
                                    <p>You will have to extract the files into some folder, then open that folder and launch the DXSETUP.exe file in order to proceed with the installation.</p>
                                    <p>4) If the above don't help, right-click the game's shortcut, go to Properties -> Compatibility and try different compatibility modes before attempting to launch the game again.</p>
                                    <h5>IF THE GAME PERMITS, TRY DIFFERENT VIDEO/AUDIO SETTINGS</h5>
                                    <p>You should look for video and audio quality settings, and start by setting all of them to disabled, or lowest possible. If that let you launch the game, try re-enabling the settings, one at a time, and see which caused the crash.</p>
                                    <p>If the above don't help, check if the game allows you to select different renderers (DirectX, OpenGL, Software etc). One of the renderers may be more stable on your machine than the default one.</p>
                                    <h5>MAKE SURE DEP (DATA EXECUTION PREVENTION) IS USING ITS DEFAULT SETTING</h5>
                                    <p>To do this, follow these steps:</p>
                                    <p>1) Right click Computer on your desktop  (or in start menu if the icon is present there) and click Properties</p>
                                    <p>2) Click Advanced system settings</p>
                                    <p>3) Open Advanced tab and select Settings in Performance section</p>
                                    <p>4) Open tab Data Execution Prevention</p>
                                    <p>5) Change DEP setting to the first option - Turn on DEP for essential Windows programs and services only</p>
                                    <p>6) Confirm with OK</p>
                                </div>
                            </div>
                        </div>
    
                    </div>
    
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="toggle" href="#access">
                                <i class="fa fa-plus"></i> Access violation
                            </a>
                        </div>
                        <div id="access" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <h5>PLEASE RUN THE GAME AS ADMINISTRATOR</h5>
                                <p>Please make sure that you use "Run as Administrator" to install and to start the game (right-click on the shortcut or setup file and select "Run as Administrator").</p>
                                <h5>WHITELIST THE SETUP IN YOUR SECURITY SOFTWARE</h5>
                                <p>Please add the setup executable to your anti-virus/firewall software's exception/trusted list. Simply disabling firewall or AV software could not be enough, since some of these software are running still in background or in services list.</p>
                                <h5>MAKE SURE DEP (DATA EXECUTION PREVENTION) IS USING ITS DEFAULT SETTING</h5>
                                <p>To do this, follow these steps: </p>
                                <p>1) Right click Computer on your desktop  (or in start menu if the icon is present there) and click Properties</p>
                                <p>2) Click Advanced system settings</p>
                                <p>3) Open Advanced tab and select Settings in Performance section</p>
                                <p>4) Open tab Data Execution Prevention</p>
                                <p>5) Change DEP setting to the first option - Turn on DEP for essential Windows programs and services only</p>
                                <p>6) Confirm with OK</p>
                                <h5>TRY LAUNCHING IN CLEAN BOOT MODE</h5>    
                                <p>If you have any doubts regarding the presence or activity of system security software on your PC, please try running your PC in clean boot mode.</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="toggle" href="#Control">
                                <i class="fa fa-plus"></i> Control issues
                            </a>
                        </div>
                        <div id="Control" class="accordion-body collapse">
                            <div class="accordion-inner">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, voluptas, magnam, officiis,
                                veritatis rerum amet enim in repellendus quae reprehenderit aut ipsum corporis dolore maxime
                                cumque labore incidunt ad iusto maiores error doloribus. Similique, sequi, laboriosam
                                voluptatum omnis nobis incidunt exercitationem facilis voluptatibus maxime harum accusantium
                                tempore magni voluptate qui velit fugit iste quis aut possimus a praesentium ad in quia.
                                Necessitatibus, excepturi, iste, quisquam expedita ratione quibusdam in ex nobis omnis odit
                                voluptates veritatis recusandae sit. Adipisci perspiciatis laudantium vitae quaerat. Porro,
                                mollitia, sequi cupiditate ratione cumque aut laboriosam fuga et nostrum officia. Expedita,
                                vitae officia recusandae eius assumenda.
    
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="menu1" class="tab-pane fade">
        <h3>Orders & Payments</h3>
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-12">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="toggle" href="#order1">
                                <i class="fa fa-plus"></i> Locality
                            </a>
                        </div>
                        <div id="order1" class="accordion-body collapse">
                            <div class="accordion-inner">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, voluptas, magnam, officiis,
                                veritatis rerum amet enim in repellendus quae reprehenderit aut ipsum corporis dolore maxime
                                cumque labore incidunt ad iusto maiores error doloribus. Similique, sequi, laboriosam
                                voluptatum omnis nobis incidunt exercitationem facilis voluptatibus maxime harum accusantium
                                tempore magni voluptate qui velit fugit iste quis aut possimus a praesentium ad in quia.
                                Necessitatibus, excepturi, iste, quisquam expedita ratione quibusdam in ex nobis omnis odit
                                voluptates veritatis recusandae sit. Adipisci perspiciatis laudantium vitae quaerat. Porro,
                                mollitia, sequi cupiditate ratione cumque aut laboriosam fuga et nostrum officia. Expedita,
                                vitae officia recusandae eius assumenda.
    
    
                            </div>
                        </div>
    
                    </div>
    
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="toggle" href="#order2">
                                <i class="fa fa-plus"></i> Property Type
                            </a>
                        </div>
                        <div id="order2" class="accordion-body collapse">
                            <div class="accordion-inner">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, voluptas, magnam, officiis,
                                veritatis rerum amet enim in repellendus quae reprehenderit aut ipsum corporis dolore maxime
                                cumque labore incidunt ad iusto maiores error doloribus. Similique, sequi, laboriosam
                                voluptatum omnis nobis incidunt exercitationem facilis voluptatibus maxime harum accusantium
                                tempore magni voluptate qui velit fugit iste quis aut possimus a praesentium ad in quia.
                                Necessitatibus, excepturi, iste, quisquam expedita ratione quibusdam in ex nobis omnis odit
                                voluptates veritatis recusandae sit. Adipisci perspiciatis laudantium vitae quaerat. Porro,
                                mollitia, sequi cupiditate ratione cumque aut laboriosam fuga et nostrum officia. Expedita,
                                vitae officia recusandae eius assumenda.
    
    
                            </div>
                        </div>
                    </div>
    
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="toggle" href="#order3">
                                <i class="fa fa-plus"></i> Property Budget
                            </a>
                        </div>
                        <div id="order3" class="accordion-body collapse">
                            <div class="accordion-inner">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, voluptas, magnam, officiis,
                                veritatis rerum amet enim in repellendus quae reprehenderit aut ipsum corporis dolore maxime
                                cumque labore incidunt ad iusto maiores error doloribus. Similique, sequi, laboriosam
                                voluptatum omnis nobis incidunt exercitationem facilis voluptatibus maxime harum accusantium
                                tempore magni voluptate qui velit fugit iste quis aut possimus a praesentium ad in quia.
                                Necessitatibus, excepturi, iste, quisquam expedita ratione quibusdam in ex nobis omnis odit
                                voluptates veritatis recusandae sit. Adipisci perspiciatis laudantium vitae quaerat. Porro,
                                mollitia, sequi cupiditate ratione cumque aut laboriosam fuga et nostrum officia. Expedita,
                                vitae officia recusandae eius assumenda.
    
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="menu2" class="tab-pane fade">
        <h3>Account & Store</h3>
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-12">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="toggle" href="#account1">
                                <i class="fa fa-plus"></i> Locality
                            </a>
                        </div>
                        <div id="account1" class="accordion-body collapse">
                            <div class="accordion-inner">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, voluptas, magnam, officiis,
                                veritatis rerum amet enim in repellendus quae reprehenderit aut ipsum corporis dolore maxime
                                cumque labore incidunt ad iusto maiores error doloribus. Similique, sequi, laboriosam
                                voluptatum omnis nobis incidunt exercitationem facilis voluptatibus maxime harum accusantium
                                tempore magni voluptate qui velit fugit iste quis aut possimus a praesentium ad in quia.
                                Necessitatibus, excepturi, iste, quisquam expedita ratione quibusdam in ex nobis omnis odit
                                voluptates veritatis recusandae sit. Adipisci perspiciatis laudantium vitae quaerat. Porro,
                                mollitia, sequi cupiditate ratione cumque aut laboriosam fuga et nostrum officia. Expedita,
                                vitae officia recusandae eius assumenda.
    
    
                            </div>
                        </div>
    
                    </div>
    
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="toggle" href="#account2">
                                <i class="fa fa-plus"></i> Property Type
                            </a>
                        </div>
                        <div id="account2" class="accordion-body collapse">
                            <div class="accordion-inner">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, voluptas, magnam, officiis,
                                veritatis rerum amet enim in repellendus quae reprehenderit aut ipsum corporis dolore maxime
                                cumque labore incidunt ad iusto maiores error doloribus. Similique, sequi, laboriosam
                                voluptatum omnis nobis incidunt exercitationem facilis voluptatibus maxime harum accusantium
                                tempore magni voluptate qui velit fugit iste quis aut possimus a praesentium ad in quia.
                                Necessitatibus, excepturi, iste, quisquam expedita ratione quibusdam in ex nobis omnis odit
                                voluptates veritatis recusandae sit. Adipisci perspiciatis laudantium vitae quaerat. Porro,
                                mollitia, sequi cupiditate ratione cumque aut laboriosam fuga et nostrum officia. Expedita,
                                vitae officia recusandae eius assumenda.
    
    
                            </div>
                        </div>
                    </div>
    
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="toggle" href="#account3">
                                <i class="fa fa-plus"></i> Property Budget
                            </a>
                        </div>
                        <div id="account3" class="accordion-body collapse">
                            <div class="accordion-inner">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, voluptas, magnam, officiis,
                                veritatis rerum amet enim in repellendus quae reprehenderit aut ipsum corporis dolore maxime
                                cumque labore incidunt ad iusto maiores error doloribus. Similique, sequi, laboriosam
                                voluptatum omnis nobis incidunt exercitationem facilis voluptatibus maxime harum accusantium
                                tempore magni voluptate qui velit fugit iste quis aut possimus a praesentium ad in quia.
                                Necessitatibus, excepturi, iste, quisquam expedita ratione quibusdam in ex nobis omnis odit
                                voluptates veritatis recusandae sit. Adipisci perspiciatis laudantium vitae quaerat. Porro,
                                mollitia, sequi cupiditate ratione cumque aut laboriosam fuga et nostrum officia. Expedita,
                                vitae officia recusandae eius assumenda.
    
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="menu3" class="tab-pane fade">
        <h3>Downloads & Installing</h3>
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-12">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="toggle" href="#download1">
                                <i class="fa fa-plus"></i> Locality
                            </a>
                        </div>
                        <div id="download1" class="accordion-body collapse">
                            <div class="accordion-inner">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, voluptas, magnam, officiis,
                                veritatis rerum amet enim in repellendus quae reprehenderit aut ipsum corporis dolore maxime
                                cumque labore incidunt ad iusto maiores error doloribus. Similique, sequi, laboriosam
                                voluptatum omnis nobis incidunt exercitationem facilis voluptatibus maxime harum accusantium
                                tempore magni voluptate qui velit fugit iste quis aut possimus a praesentium ad in quia.
                                Necessitatibus, excepturi, iste, quisquam expedita ratione quibusdam in ex nobis omnis odit
                                voluptates veritatis recusandae sit. Adipisci perspiciatis laudantium vitae quaerat. Porro,
                                mollitia, sequi cupiditate ratione cumque aut laboriosam fuga et nostrum officia. Expedita,
                                vitae officia recusandae eius assumenda.
    
    
                            </div>
                        </div>
    
                    </div>
    
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="toggle" href="#download2">
                                <i class="fa fa-plus"></i> Property Type
                            </a>
                        </div>
                        <div id="download2" class="accordion-body collapse">
                            <div class="accordion-inner">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, voluptas, magnam, officiis,
                                veritatis rerum amet enim in repellendus quae reprehenderit aut ipsum corporis dolore maxime
                                cumque labore incidunt ad iusto maiores error doloribus. Similique, sequi, laboriosam
                                voluptatum omnis nobis incidunt exercitationem facilis voluptatibus maxime harum accusantium
                                tempore magni voluptate qui velit fugit iste quis aut possimus a praesentium ad in quia.
                                Necessitatibus, excepturi, iste, quisquam expedita ratione quibusdam in ex nobis omnis odit
                                voluptates veritatis recusandae sit. Adipisci perspiciatis laudantium vitae quaerat. Porro,
                                mollitia, sequi cupiditate ratione cumque aut laboriosam fuga et nostrum officia. Expedita,
                                vitae officia recusandae eius assumenda.
    
    
                            </div>
                        </div>
                    </div>
    
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="toggle" href="#download3">
                                <i class="fa fa-plus"></i> Property Budget
                            </a>
                        </div>
                        <div id="download3" class="accordion-body collapse">
                            <div class="accordion-inner">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, voluptas, magnam, officiis,
                                veritatis rerum amet enim in repellendus quae reprehenderit aut ipsum corporis dolore maxime
                                cumque labore incidunt ad iusto maiores error doloribus. Similique, sequi, laboriosam
                                voluptatum omnis nobis incidunt exercitationem facilis voluptatibus maxime harum accusantium
                                tempore magni voluptate qui velit fugit iste quis aut possimus a praesentium ad in quia.
                                Necessitatibus, excepturi, iste, quisquam expedita ratione quibusdam in ex nobis omnis odit
                                voluptates veritatis recusandae sit. Adipisci perspiciatis laudantium vitae quaerat. Porro,
                                mollitia, sequi cupiditate ratione cumque aut laboriosam fuga et nostrum officia. Expedita,
                                vitae officia recusandae eius assumenda.

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script-section')
    <script>
        jQuery('.accordion-toggle').click(function () {
            var has = jQuery(this);
            if (has.hasClass('collapsed')) {s
                jQuery(this).find('i').removeClass('fa-plus');
                jQuery(this).find('i').addClass('fa-minus');
            }
            else {
                jQuery(this).find('i').removeClass('fa-minus');
                jQuery(this).find('i').addClass('fa-plus');
            }
        })
    </script>
@endsection