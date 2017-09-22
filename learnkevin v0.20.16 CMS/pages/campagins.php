

<?php lk_verticalSpace(3);?>
<div class="row">

    <div class="col-md-12">

      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Published</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">New campagins</a></li>
        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Drafts</a></li>
        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Rejected</a></li>
        <li role="presentation"><a href="#pending" aria-controls="pending" role="tab" data-toggle="tab">Pending aprovals</a></li>
      </ul>

    </div>
</div>
<br>
<div>
<!-- Tab panes -->
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
      <!--published -->
      <div role="tabpanel" class="tab-pane" id="published">
          <div class="row">
            <div class="col-md-12">
              <div class="list-group">
                    <a href="#" class="list-group-item"><h6 href="#" class="lk-list-item-heading">D700 on rent with macro 300mm lenses</h6></a>
                    <a href="#" class="list-group-item"><h6 href="#" class="lk-list-item-heading">DSLR 300 on rent</h6></a>
              </div>
            </div>
          </div>
       </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">

      <!--camp--->
      <div role="tabpanel" class="tab-pane active" id="campagins">
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-info">
                <div class="panel-heading">
                    <h2>Create new campagin</h2>
                </div>
                <div class="panel-body">

                <form>
                  <div class="form-group">
                    Pickup date <input id="datepicker1" />
                    Return date <input id="datepicker2" />
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary"value="">+ Add item</button>
                  </div>
                  <div class="form-group">
                    <select value="" name="" id="">
                        <option vlaue="">Select item ....</option>
                        <option value="cam1">Nikon DSLR 300</option>
                        <option value="cam1">Nikon DSLR 500</option>
                        <option value="cam1">Nikon DSLR 700</option>
                        <option value="cam1">Cannon DSLR 300</option>
                        <option value="cam1">Cannon DSLR 500</option>
                        <option value="cam1">Cannon DSLR 700</option>
                        <option value="cam1">Camcoder 300</option>
                        <option value="cam1">Camcoder DSLR 300</option>
                        <option value="cam1">Camcoder DSLR 300</option>
                        <option value="cam1">Camcoder DSLR 300</option>
                    </select>
                    Quantity <input type="number" name="" class="" />
                  </div>
                </form>
              </div> <!-- panel body -->
              </div>
            </div>
          </div>
        </div> <!-- end of camp-->


    </div>
    <div role="tabpanel" class="tab-pane" id="messages">
          <!-- draft-->
          <div role="tabpanel" class="tab-pane active" id="draft">
            <div class="list-group">
              <a href="#" class="list-group-item"><h5 class="list-group-item-info"></h5>DSLR 700 with lens 500mm </a>
              <a href="#" class="list-group-item"><h5 class="list-group-item-info"></h5>DSLR 700 with lens 500mm </a>
              <a href="#" class="list-group-item"><h5 class="list-group-item-info"></h5>DSLR 700 with lens 500mm </a>
              <a href="#" class="list-group-item"><h5 class="list-group-item-info"></h5>DSLR 700 with lens 500mm </a>
            </div>
          </div><!--  end of draft-->
    </div>
    <div role="tabpanel" class="tab-pane" id="settings">      <!-- rejected -->
          <div role="tabpanel" class="tab-pane active" id="rejected">
            <div class="list-group">
              <a href="#" class="list-group-item"><h5 class="list-group-item-info"></h5>DSLR 700 with lens 500mm </a>
              <a href="#" class="list-group-item"><h5 class="list-group-item-info"></h5>DSLR 700 with lens 500mm </a>
              <a href="#" class="list-group-item"><h5 class="list-group-item-info"></h5>DSLR 700 with lens 500mm </a>

            </div>
          </div>
          <!--  end of the rejected-->

    </div>
    <div role="tabpanel" class="tab-pane" id="pending"> There are no pending campagins</div>
  </div>

</div>
