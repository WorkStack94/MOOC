<head>
  <title>Mooc Experience</title>
  <meta charset="UTF-8">
  <!-- library javascript-->
  <script language="javascript" type="text/javascript" src="asset/lib/jquery-2.1.1.js"></script>
  <script language="javascript" type="text/javascript" src="asset/bootstrap-dist/js/bootstrap.js"></script>
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  
  <!-- library css -->
  <link rel="stylesheet"  href="asset/bootstrap-dist/css/bootstrap.css">
  <link rel="stylesheet" href="asset/bootstrap-dist/css/bootstrap-theme.css">
  
  <!-- my own -->
  <script type="text/javascript" src="script/script-1.js"></script>
  <script type="text/javascript" src="script/modal.js"></script>
  <link rel="stylesheet" href="style/style-1.css">
</head>
<body>

<!-- <div><a data-toggle="modal" href="#myModal" class="btn btn-primary">Launch demo modal</a></div> -->

    <!-- modal Selection des cours-->
    <div id="modalCourse" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container" style="margin-top:20px;">
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="list-group" id="list1">
                        <a href="#" class="list-group-item active">Tout <input title="toggle all" type="checkbox" class="all pull-right"></a>
                        <a href="#" class="list-group-item">Cours 1 <input type="checkbox" class="pull-right"></a>
                        <a href="#" class="list-group-item">Cours 2 <input type="checkbox" class="pull-right"></a>
                        <a href="#" class="list-group-item">Cours 3 <input type="checkbox" class="pull-right"></a>
                        <a href="#" class="list-group-item">Cours 4 <input type="checkbox" class="pull-right"></a>
                        </div>
                      </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                    <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" data-dismiss="modal">Save changes</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
      </div><!-- /.modal -->
    </div>

    <!-- modal Selection des leçons -->
    <div id="modalLesson" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container" style="margin-top:20px;">
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="list-group" id="list1">
                        <a href="#" class="list-group-item active">Tout <input title="toggle all" type="checkbox" class="all pull-right"></a>
                        <a href="#" class="list-group-item">Lesson 1 <input type="checkbox" class="pull-right"></a>
                        <a href="#" class="list-group-item">Lesson 2 <input type="checkbox" class="pull-right"></a>
                        <a href="#" class="list-group-item">Lesson 3 <input type="checkbox" class="pull-right"></a>
                        <a href="#" class="list-group-item">Lesson 4 <input type="checkbox" class="pull-right"></a>
                        </div>
                      </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                    <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" data-dismiss="modal">Save changes</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
      </div><!-- /.modal -->
    </div>

    <!-- Modal selection des types -->
    <div id="modalType" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container" style="margin-top:20px;">
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="list-group" id="list1">
                        <a href="#" class="list-group-item active">Tout <input title="toggle all" type="checkbox" class="all pull-right"></a>
                        <a href="#" class="list-group-item">Type 1 <input type="checkbox" class="pull-right"></a>
                        <a href="#" class="list-group-item">Type 2 <input type="checkbox" class="pull-right"></a>
                        <a href="#" class="list-group-item">Type 3 <input type="checkbox" class="pull-right"></a>
                        <a href="#" class="list-group-item">Type 4 <input type="checkbox" class="pull-right"></a>
                        </div>
                      </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                    <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" data-dismiss="modal">Save changes</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
      </div><!-- /.modal -->
    </div>

    <!-- Modal selection de apprenants -->
    <div id="modalAppr" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container" style="margin-top:20px;">
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="list-group" id="list1">
                        <a href="#" class="list-group-item active">Tout <input title="toggle all" type="checkbox" class="all pull-right"></a>
                        <a href="#" class="list-group-item">apprenant1 <input type="checkbox" class="pull-right"></a>
                        <a href="#" class="list-group-item">apprenant2 <input type="checkbox" class="pull-right"></a>
                        <a href="#" class="list-group-item">apprenant3 <input type="checkbox" class="pull-right"></a>
                        <a href="#" class="list-group-item">apprenant4 <input type="checkbox" class="pull-right"></a>
                        </div>
                      </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                    <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" data-dismiss="modal">Save changes</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
      </div><!-- /.modal -->
    </div>

</body>