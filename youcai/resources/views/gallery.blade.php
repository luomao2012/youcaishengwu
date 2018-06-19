@extends('layouts.app')

@section('title', '主页')

@section('container')
<div class="gallery">
    <div class="container">
        <h2>Gallery</h2>
        <div class="gallery-grids">
            <div class="gallery-grids1 agile-33">
                <div class="gallery-grid-left">
                    <div class="gallery-grid-left1">
                        <a href="images/19.jpg" class="swipebox" title="Neque">
                            <img src="images/19.jpg" alt=" " class="img-responsive">
                            <div class="p-mask">
                                <h4>Neque Porro</h4>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                    amet, consectetur, adipisci velit.</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-grid-left1">
                        <a href="images/11.jpg" class="swipebox" title="Neque">
                            <img src="images/11.jpg" alt=" " class="img-responsive">
                            <div class="p-mask">
                                <h4>Neque Porro</h4>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                    amet, consectetur, adipisci velit.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="gallery-grid-left">
                    <div class="gallery-grid-left1">
                        <a href="images/12.jpg" class="swipebox" title="Neque">
                            <img src="images/12.jpg" alt=" " class="img-responsive">
                            <div class="p-mask">
                                <h4>Neque Porro</h4>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                    amet, consectetur, adipisci velit.</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-grid-left1">
                        <a href="images/20.jpg" class="swipebox" title="Neque">
                            <img src="images/20.jpg" alt=" " class="img-responsive">
                            <div class="p-mask">
                                <h4>Neque Porro</h4>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                    amet, consectetur, adipisci velit.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="gallery-grid-left">
                    <div class="gallery-grid-left1">
                        <a href="images/21.jpg" class="swipebox" title="Neque">
                            <img src="images/21.jpg" alt=" " class="img-responsive">
                            <div class="p-mask">
                                <h4>Neque Porro</h4>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                    amet, consectetur, adipisci velit.</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-grid-left1">
                        <a href="images/13.jpg" class="swipebox" title="Neque">
                            <img src="images/13.jpg" alt=" " class="img-responsive">
                            <div class="p-mask">
                                <h4>Neque Porro</h4>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                    amet, consectetur, adipisci velit.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="gallery-grids2">
                <div class="gallery-grids2-left">
                    <div class="gallery-grid-left1">
                        <a href="images/14.jpg" class="swipebox" title="Neque">
                            <img src="images/14.jpg" alt=" " class="img-responsive">
                            <div class="p-mask">
                                <h4>Neque Porro</h4>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                    amet, consectetur, adipisci velit.</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-grid-left1">
                        <a href="images/20.jpg" class="swipebox" title="Neque">
                            <img src="images/20.jpg" alt=" " class="img-responsive">
                            <div class="p-mask">
                                <h4>Neque Porro</h4>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                    amet, consectetur, adipisci velit.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="gallery-grids2-right">
                    <div class="gallery-grid-left1">
                        <a href="images/22.jpg" class="swipebox" title="Neque">
                            <img src="images/22.jpg" alt=" " class="img-responsive">
                            <div class="p-mask">
                                <h4>Neque Porro</h4>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                    amet, consectetur, adipisci velit.</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-grids2-rightl">
                        <div class="gallery-grid-left1">
                            <a href="images/10.jpg" class="swipebox" title="Neque">
                                <img src="images/10.jpg" alt=" " class="img-responsive">
                                <div class="p-mask">
                                    <h4>Neque Porro</h4>
                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                        amet, consectetur, adipisci velit.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="gallery-grids2-rightl">
                        <div class="gallery-grid-left1">
                            <a href="images/9.jpg" class="swipebox" title="Neque">
                                <img src="images/9.jpg" alt=" " class="img-responsive">
                                <div class="p-mask">
                                    <h4>Neque Porro</h4>
                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                        amet, consectetur, adipisci velit.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- swipe box js -->
            <script src="js/jquery.swipebox.min.js"></script>
            <script type="text/javascript">
                jQuery(function($) {
                    $(".swipebox").swipebox();
                });
            </script>
            <!-- //swipe box js -->
        </div>
    </div>
</div>
@endsection