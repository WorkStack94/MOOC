<head>
  <title>Mooc Experience</title>
  <meta charset="UTF-8">
    <?php require ('link.php');?>
</head>
<body>
<!-- <div><a data-toggle="modal" href="#myModal" class="btn btn-primary">Launch demo modal</a></div> -->

    <!-- modal Selection des cours-->
<form name="input" action="selection.php" method="post">

    <div id="modalCourse" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container" style="margin-top:20px;">
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="list-group" id="list1">
                        <?php
                            $array = array('Mathematique pour l\'informatique','Pattern Java','Anglais','Corréen "aniang !"');
                            buildCheckBox('case', $array);
                        ?> 
                        </div>
                      </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                    <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <input class="btn btn-primary" data-dismiss="modal" type="submit">Save changes</input>
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
                        <?php
                            $array = array('Mathematique pour l\'informatique','Pattern Java','Anglais','Corréen "aniang !"');
                            buildCheckBox('case',$array);
                        ?> 
                        </div>
                      </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                    <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" data-dismiss="modal" type="submit">Save changes</button>
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
                        <?php
                            $array = array('Mathematique pour l\'informatique','Pattern Java','Anglais','Corréen "aniang !"');
                            buildCheckBox('case',$array);
                        ?> 
                        </div>
                      </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                    <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" data-dismiss="modal" type="submit">Save changes</button>
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
                        <?php
                            $array = array('Mathematique pour l\'informatique','Pattern Java','Anglais','Corréen "aniang !"');
                            buildCheckBox('case',$array);
                        ?> 
                        </div>
                      </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                    <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" data-dismiss="modal" type="submit">Save changes</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
      </div><!-- /.modal -->
    </div>

</form>
</body>