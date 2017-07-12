<!DOCTYPE html>
<html lang="en">
<?php error_reporting(E_ALL ^ E_WARNING); ?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>טבע בראש</title>

    <!-- Bootstrap Core CSS-->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap_rtl.css" type="text/css">

    <!-- Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/modern-business.css" type="text/css">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" type="text/css">

    <script src="<?php echo base_url();?>assets/grocery_crud/jquery-1.11.1.js"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">ניוט טוגל</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class = "logo-text"><a href="<?php echo base_url();?>"><img class="logo-img" src="<?php echo base_url();?>assets/tevabarosh_logo_green.png" alt=""></a></div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">פורטפוליו <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo base_url();?>page/dynamicPage/portfolio_1_col/100">פורטפוליו - עמוד 1</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>page/dynamicPage/portfolio_2_col/20">פורטפוליו 2 עמודים</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>page/dynamicPage/portfolio_3_col/9">פורטפוליו 3 עמודים</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>page/dynamicPage/portfolio_4_col/12">פרוטפוליו 4 עמודים</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">בלוג <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo base_url();?>page/staticPage/blog_home_1">בלוג בית 1</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>page/staticPage/blog_home_2">בלוג בית 2</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>page/staticPage/blog_post">בלוג - פוסט</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">עמודים מיוחדים <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo base_url();?>page/staticPage/fullwidth">רוחב מלא</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>page/staticPage/sidebar">סיידבר</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>page/staticPage/faq">שאלות ותשובות</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>page/staticPage/page_404">404</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>page/staticPage/pricing">טבלאות תמחור</a>
                            </li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="<?php echo base_url();?>catalog/?cat=2">ציפורים</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">צמחים<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo base_url();?>catalog/?cat=3">צמחי גינה</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>catalog/?cat=4">סוקולנטים</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>catalog/?cat=1">פרחי שדה</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>catalog/?cat=5">עצים ושיחים</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>catalog/?cat=3">סיווג צמחים</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>">הגן שלי</a>
                    </li>
                    <!-- <li>
                        <a href="<?php echo base_url();?>page/staticPage/about">מי אנחנו</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>page/staticPage/services">שרותים</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>page/staticPage/contact">צור קשר</a>
                    </li> -->
                    <li>
                        <a href="<?php echo base_url();?>admin">ניהול</a>
                    </li>
                </ul>
                <div style="margin-top: 15px;margin-right: 15px; float:left; ">
                  <form method="get" action="<?php echo base_url();?>catalog">
                    <input type="text" name="s" id="s" />
                    <input type="submit" value="חפש" />
                  </form>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
