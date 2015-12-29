<?php ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700|Lato:400,300,400italic' rel='stylesheet' type='text/css'>
    <!-- Video.js -->
    <link href="http://vjs.zencdn.net/5.4.4/video-js.css" rel="stylesheet">

    <title>Equimundo UI</title>

    <link href="dist/assets/css/styles.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" class="navbar-brand navbar-brand-centered">Equimundo UI</a>
        </div>
        <div class="nav navbar-nav navbar-left">
                <input type="text" values="search">
        </div>
        <div class="nav navbar-nav navbar-right">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#}">
                            messages
                            <span class="badge badge-normal">5</span>
                        </a>
                    </li>

                    <li>
                        <a href="#}" class="collection-item grey lighten-3">
                            notifications
                            <span class="new badge">5</span>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Horses<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">My horses</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">Test Horse</a>
                            </li>

                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    Create a horse<span class="badge badge-info"><i class="fa fa-plus-square-o"></i></span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Test Person <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">
                                    <span class="fa fa-user"></span> Profile
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Settings
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Admin Panel
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
        </div>
    </div>
</nav>

            <div class="sidebar">

                  <ul class="list-group">
                    <li class="list-group-item"><a href="#typography">Typography</a></li>
                    <li class="list-group-item"><a href="#swatches">Swatches</a></li>
                    <li class="list-group-item"><a href="#buttons">Buttons</a></li>
                    <li class="list-group-item"><a href="#formelements">Form elements</a></li>
                    <li class="list-group-item"><a href="#timeline">Timeline</a></li>
                    <li class="list-group-item"><a href="#comments">Comments</a></li>
                    <li class="list-group-item"><a href="#advertisements">Advertisements</a></li>
                    <li class="list-group-item"><a href="#videoplayer">Video player</a></li>
                  </ul>
            </div>

    <div class="container theme-showcase" role="main">

      <div class="row">
      <div class="col-md-7">
        <div class="page-header">
          <h4 id="typography">Typography</h4>
        </div>

        <div class="row">
          <div class="col-sm-5">
            <h6 style="font-size: 11px; letter-spacing: 1pt; text-transform: uppercase; font-weight: normal; ">Main font | Serif</h6>
            <h3 class="lato">Lato</h3>(thin, light, normal &amp; bold)<br/><br/>
            <a href="http://www.fontsquirrel.com/fonts/download/lato" class="btn btn-primary">Download Lato.zip (5,8 MB)</a>
          </div>
          <div class="col-sm-5">
            <h6>Secondary font | Sans-serif</h6>
            <h3 class="lora">Lora</h3>(normal, italic &amp; bold)<br/><br/>
            <a href="http://www.fontsquirrel.com/fonts/download/lora" class="btn btn-primary">Download Lora.zip (469 kB)</a>
          </div>
        </div>
          <br/><br/>
          <h6>Stylesheet</h6>
          <pre>&lt;link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700|Lato:400,300,400italic' rel='stylesheet' type='text/css'&gt;</pre><br/><br/>
      </div>

      <div class="col-md-4">
        <div class="page-header">
          <h4>Titles</h4>
        </div>

          <h1>h1. Equimundo</h1>
          <h2>h2. Equimundo</h2>
          <h3>h3. Equimundo</h3>
          <h4>h4. Equimundo</h4>
          <h5>h5. Equimundo</h5>
          <h6>h6. Equimundo</h6>
      </div>
    </div>

    <!--
    <div class="row">
      <div class="col-md-6">
        <div class="page-header">
          <h1>Icons</h1>
        </div>
      </div>

      <div class=""
    </div>
    -->
        <div class="page-header">
          <h4 id="swatches">Swatches</h4>
        </div>

        <div class="swatch-container">
            <div class="swatch green-brand">
                <strong>#1ABC9C</strong><br/>
                <small>$green-brand</small><br/>
                <small>BRAND TURQUOISE</small>
            </div>
            <div class="swatch green">
                <strong>#16a085</strong><br/>
                <small>$green</small><br/>
                <small>GREEN</small>
            </div>
            <div class="swatch green-dark">
                <strong>#1f705d</strong><br/>
                <small>$green-dark</small><br/>
                <small>DARK GREEN</small>
            </div>
            <div class="swatch gray-light">
                <strong>#e9f0f4</strong><br/>
                <small>$gray-light</small><br/>
                <small>LIGHT GRAY</small>
            </div>
            <div class="swatch gray">
                <strong>#9eb2c0</strong><br/>
                <small>$gray-brand</small><br/>
                <small>GRAY</small>
            </div>
            <div class="swatch gray-dark">
                <strong>#2e3641</strong><br/>
                <small>$gray-dark</small><br/>
                <small>DARK GRAY</small>
            </div>
            <div class="swatch success">
                <strong>#2ecc71</strong> <br>
                <small>$color-success</small> <br>
                <small>LIME GREEN</small>
            </div>
            <div class="swatch info">
                <strong>#3498db</strong><br/>
                <small>$color-info</small><br/>
                <small>BRIGHT BLUE</small>
            </div>
            <div class="swatch warning">
                <strong>#e67e22</strong><br/>
                <small>$color-warning</small><br/>
                <small>VIVID ORANGE</small>
            </div>
            <div class="swatch error">
                <strong>#bc1a3a</strong><br/>
                <small>$color-error</small><br/>
                <small>STRONG RED</small>
            </div>
            <div class="swatch white">
                <strong>#fdffff</strong><br>
                <small>$color-white</small><br>
                <small>VERY PALE</small>
            </div>
        </div>


                <div class="page-header">
                    <h4>Buttons</h4>
                </div>

                <div class="row">
                    <div class="col-lg-5">
                        <button class="btn btn-hg btn-primary">Huge button</button>
                        <br/><br/>
                        <pre>&lt;button class="btn btn-hg btn-primary"&gt;<br/>   Huge button<br/>&lt;/button&gt;</pre><br/><br/>
                            
                        <button class="btn btn-embossed btn-primary">Embossed button</button>
                        <br/><br/>
                        <pre>&lt;button class="btn btn-embossed btn-primary"&gt;<br/>   Embossed button<br/>&lt;/button&gt;</pre><br/><br/>
                    </div>
                    
                    <div class="col-lg-5">
                        <button class="btn btn-primary">Primary button</button>
                        <br/><br/>
                        <pre>&lt;button class="btn btn-primary"&gt;<br/>   Primary button<br/>&lt;/button&gt;</pre><br/><br/>

                        <button class="btn btn-small">Save</button>
                        <button class="btn btn-small btn-cancel">Cancel</button>
                        <br/><br/>
                        <pre>&lt;button class="btn btn-wide"&gt;Save&lt;/button&gt;<br/>&lt;button class="btn btn-cancel"&gt;Cancel&lgt;/button&gt;</pre>
                    </div>
                </div>

                <div class="page-header">
                    <h4>Form elements</h4>
                </div>
                Input (text, number, date), checkbox, radiobutton, textarea, dropdown
                <h6>INPUT</h6><br/>
                <form>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-5">
                                <input type="text" class="form-control input-hg" placeholder="Huge" /><br/>
                                <pre>&lt;input type=<span class="atv">"text"</span> class=<span class="atv">"form-control input-hg"</span> placeholder=<span class="atv">"Huge"</span> /&gt;</pre><hr/>
                                <input type="text" class="form-control input-lg" placeholder="Large" /><br/>
                                <pre>&lt;input type=<span class="atv">"text"</span> class=<span class="atv">"form-control input-lg"</span> placeholder=<span class="atv">"Large"</span> /&gt;</pre>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" placeholder="Default" /><br/>
                                <pre>&lt;input type=<span class="atv">"text"</span> class=<span class="atv">"form-control"</span> placeholder=<span class="atv">"Default"</span> /&gt;</pre><hr/>
                                <input type="text" class="form-control input-sm" placeholder="Small" /><br/>
                                <pre>&lt;input type=<span class="atv">"text"</span> class=<span class="atv">"form-control input-sm"</span> placeholder=<span class="atv">"Small"</span> /&gt;</pre>
                            </div>
                        </div><hr />
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group has-feedback">
                                  <input type="text" value="" placeholder="With icon" class="form-control" />
                                  <span class="form-control-feedback fui-check"></span>
                                </div>

                                <!-- Prepend -->
                                <div class="input-group">
                                  <span class="input-group-addon">@</span>
                                  <input type="text" class="form-control" placeholder="Prepend" />
                                </div><br/>

                                <!-- Append -->
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Append" />
                                  <span class="input-group-addon">@</span>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <pre>&lt;div class="form-group has-feedback"&gt;<br/>&lt;input type="text" value="" placeholder="With icon" class="form-control" /&gt;<br/>&lt;span class="form-control-feedback fui-check"&gt;&lt;/span&gt;<br/>&lt;/div&gt;<br/><br/>&lt;!-- Prepend --&gt;<br/>&lt;div class="input-group"&gt;<br/><span class="tag">&lt;span class=<span class="atv">"input-group-addon"</span>&gt;</span>@&lt;<span class="tag">/span</span>&gt;<br/>&lt;input type=<span class="atv">"text"</span> class=<span class="atv">"form-control"</span> placeholder=<span class="atv">"Prepend"</span> /&gt;<br/>&lt;/div&gt;<br/><br/>&lt;!-- Append --&gt;<br/>&lt;div class=<span class="atv">"input-group"</span>&gt;<br/>&lt;input type=<span class="atv">"text"</span> class=<span class="atv">"form-control"</span> placeholder=<span class="atv">"Append"</span> /&gt;<br/>&lt;span class=<span class="atv">"input-group-addon"</span>>@&lt;/span&gt;<br/>&lt;/div&gt;
                                </pre>
                            </div>
                        </div><hr/>
                        <div class="row">
                            <div class="col-md-5">
                                <!-- Default skin  -->
                                <div class="btn-group">
                                  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                   Dropdown menu<span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                  </ul>
                                </div>

                                <!-- Inverted skin  -->
                                <div class="btn-group">
                                  <button class="btn btn-inverse dropdown-toggle" type="button" data-toggle="dropdown">
                                    Dropdown menu<span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu dropdown-menu-inverse" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                  </ul>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <pre class="prettify lang-html">&lt;!-- Default skin  --&gt;<br/>&lt;div class="btn-group"&gt;<br/>&lt;button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"&gt;<br/>Dropdown menu&lt;span class="caret"&gt;&lt;/span&gt;<br/>&lt;/button&gt;<br/>&lt;ul class="dropdown-menu" role="menu"&gt;<br/>&lt;li&gt;&lt;a href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;<br/>&lt;li&gt;&lt;a href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;<br/>&lt;li&gt;&lt;a href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;<br/>&lt;li class="divider"&gt;&lt;/li&gt;<br/>&lt;li&gt;&lt;a href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;<br/>&lt;/ul&gt;<br/>&lt;/div&gt;<br/><br/>&lt;!-- Inverted skin  --&gt;<br/>&lt;div class="btn-group"&gt;<br/>&lt;button class="btn btn-inverse dropdown-toggle" type="button" data-toggle="dropdown"&gt;<br/>Dropdown menu&lt;span class="caret"&gt;&lt;/span&gt;<br/>&lt;/button&gt;<br/>&lt;ul class="dropdown-menu dropdown-menu-inverse" role="menu"&gt;<br/>&lt;li&gt;&lt;a href="#">Action</a>&lt;/li&gt;<br/>&lt;li&gt;&lt;a href="#">Another action&lt;/a>&lt;/li&gt;<br/>&lt;li&gt;&lt;a href="#">Something else here&lt;/a>&lt;/li&gt;<br/>&lt;li class="divider">&lt;/li&gt;<br/>&lt;li&gt;&lt;a href="#">Separated link&lt;/a>&lt;/li&gt;<br/>&lt;/ul><br/>&lt;/div>
                                </pre>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <!-- Error state -->
                                <div class="form-group has-error">
                                  <input class="form-control" type="text" placeholder="Error" />
                                </div>

                                <!-- Warning state -->
                                <div class="form-group has-warning">
                                  <input class="form-control" type="text" placeholder="Warning" />
                                </div>

                                <!-- Success state -->
                                <div class="form-group has-success">
                                  <input class="form-control" type="text" placeholder="Success" />
                                </div>

                                <!-- Disabled state -->
                                <div class="form-group">
                                  <input class="form-control" type="text" placeholder="Disabled" disabled />
                                </div>
                            </div>
                            <div class="col-md-5">
                                <pre class="prettyprint lang-html">&lt;!-- Error state --&gt;<br/>&lt;div class="form-group has-error"&gt;<br/>&lt;input class="form-control" type="text" placeholder="Error" /&gt;<br/>&lt;/div&gt;<br/><br/>&lt;!-- Warning state --&gt;<br/>&lt;div class="form-group has-warning"&gt;<br/>&lt;input class="form-control" type="text" placeholder="Warning" /&gt;<br/>&lt;/div&gt;<br/><br/>&lt;!-- Success state --&gt;<br/>&lt;div class="form-group has-success"&gt;<br/>&lt;input class="form-control" type="text" placeholder="Success" /&gt;<br/>&lt;/div&gt;<br/><br/>&lt;!-- Disabled state --&gt;<br/>&lt;div class="form-group"&gt;<br/>&lt;input class="form-control" type="text" placeholder="Disabled" disabled /&gt;<br/>&lt;/div&gt;
                                </pre></div>

                            <div class="col-md-5">
                                <div class="input-group input-group-hg input-group-rounded">
                                  <span class="input-group-btn">
                                    <button type="submit" class="btn"><span class="fui-search"></span></button>
                                  </span>
                                  <input type="text" class="form-control" placeholder="Search" id="search-query-2">
                                </div><br/>

                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Search" id="search-query-3">
                                  <span class="input-group-btn">
                                    <button type="submit" class="btn"><span class="fui-search"></span></button>
                                  </span>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>


        <div class="page-header">
            <h4>Timeline</h4>
        </div>

        <div class="page-header">
            <h4>Comments</h4>
        </div>

        <div class="page-header">
            <h4>Advertisements</h4>
        </div>

        <div class="page-header">
            <h4>Video player</h4>
        </div>

              <video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
              poster="resources/poster.png" data-setup="{}">
                <source src="resources/sample.mp4" type='video/mp4'>
                <!-- <source src="MY_VIDEO.webm" type='video/webm'> -->
                <p class="vjs-no-js">
                  To view this video please enable JavaScript, and consider upgrading to a web browser that
                  <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
              </video>

    </div> <!-- .container -->
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="node_modules/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
    <script src="resources/scripts/prettify.js"></script>
    <!-- Video.js -->
    <script src="http://vjs.zencdn.net/5.4.4/video.js"></script>
    <!-- Flat UI -->
    <script src="resources/scripts/flat-ui.min.js"></script>
  </body>
</html>
