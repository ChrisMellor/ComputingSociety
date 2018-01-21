<?php

$page_title = "Home";
$page_description = "Description of this page";

include 'include/header.php';
?>
<style>
    <?php include 'css/index.css'?>
</style>
<?php
include 'include/navigation.php';

?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item">
            <img class="first-slide"
                 src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                 alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Example headline.</h1>
                    <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous"
                        Glyphicon buttons on the left and right might not load/display properly due to web
                        browser security rules.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="item active">
            <img class="second-slide"
                 src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                 alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida
                        at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="third-slide"
                 src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                 alt="Third slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida
                        at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam aperiam aut, ducimus eius eveniet ex
                inventore itaque maiores molestiae molestias mollitia nemo nobis numquam omnis
                possimus quia similique ullam!</p>
            <p>Culpa dignissimos facere maxime odio ut. Amet doloribus dolorum facilis ipsam iusto nesciunt, soluta!
                Accusamus beatae, debitis labore minus repellat sit soluta? Consectetur eaque id
                officia porro quasi repellat vero!</p>
            <p>A ab accusamus at autem dicta dolor eaque hic illum iste libero magnam nobis pariatur quas qui ratione
                recusandae reiciendis, soluta temporibus tenetur totam ullam velit voluptatum.
                Autem, eveniet quaerat!</p>
            <p>Animi blanditiis commodi consequuntur fuga fugit non numquam reiciendis sed sunt voluptatibus? A
                accusantium cumque ducimus explicabo facilis in ipsam, labore nam, quibusdam reiciendis
                sed totam. Dignissimos esse nobis unde.</p>
        </div>
        <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aperiam atque beatae, consequatur
                dignissimos distinctio doloribus eveniet excepturi exercitationem ipsa iusto
                laudantium libero mollitia nam nulla porro, qui quos temporibus.</p>
            <p>Amet ipsum mollitia nobis soluta. Corporis cupiditate dicta impedit repellendus tempore! A delectus
                distinctio dolores eius eos error fugit illum ipsa libero, quas qui, quisquam
                repellat, sint. Cum provident, tenetur.</p>
            <p>Asperiores blanditiis deleniti doloribus eligendi excepturi impedit in incidunt magnam maxime, molestias
                nesciunt porro repellendus sapiente sint, soluta tempore ut voluptate?
                Consequatur, dicta ducimus eaque explicabo fugit harum non qui?</p>
            <p>Aliquam delectus doloremque ipsum laborum, minus molestiae molestias optio tempora ut veniam! Alias cum
                dicta iusto nostrum porro temporibus. Est explicabo impedit iste minus neque
                nihil nulla repellendus vel voluptatibus.

        </div>
    </div>
</div>
<?php
include 'include/footer.php';
?>

