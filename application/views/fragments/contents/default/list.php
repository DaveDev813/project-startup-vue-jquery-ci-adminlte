  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  
  <section class="content-header">
    <h1>Manage Customer</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#"><i class="fa fa-user-circle-o"></i> Customer</a></li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">

          <div class="box-body">
            <br>
            <div class="row">              
              <div class="col-md-7">
                <div class="input-group">
                  <span class="input-group-addon">
                    <span class="fa fa-search"></span>
                  </span>
                  <input type="search" class="form-control input-sm custom-search" placeholder="Search Records">                
                </div>
              </div>
              <div class="col-md-2 col-md-offset-3">  
                <a href="<?= base_url() . $CORE->module . "/" . "add/" ?>" class="btn btn-block btn-success">
                  New Record &nbsp;<span class="fa fa-plus"></span>
                </a>
              </div>
            </div>
            <br>
            <div class="row">              
              <div class="col-md-12">
                <table class="table table-bordered table-striped striped table-default">
                  <thead>              
                    <tr>
                      <th> Action</th>
                      <?php $MODULE->columns(); ?>
                      <?php foreach($CORE->columns as $column){ ?>
                        <th><?= $column["label"] ?></th>
                      <?php } ?>
                    </tr>                
                  </thead>
                  <tbody>
                    <?php foreach($CORE->dataset as $index => $rows){ ?> 
                      <tr>
                        <td style="width:80px">
                          <div class="btn-group-vertical">
                            <a class="btn btn-sm btn-primary btn-block">
                              <span class="fa fa-eye"></span>&nbsp; View
                            </a>
                            <a class="btn btn-sm btn-warning" href="<?= base_url() . $CORE->module . "/edit?id=" . $rows[$CORE->primary] ?>">
                              <span class="fa fa-pencil"></span>&nbsp; Update
                            </a>
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-danger">
                              <span class="fa fa-remove"></span>&nbsp; Remove
                            </button>
                          </div>
                        </td>
                        <?php foreach($CORE->columns as $field => $columns){ ?> 
                          <td><?= $rows[$field] ?></td>
                        <?php } ?>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>

          </div>
          <div class="box-footer clearfix">
          </div>
        </div>
      </div>
    </div>
 
  </section>
</div>
