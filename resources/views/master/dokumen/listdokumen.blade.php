@extends('layouts/App')

@section('title', 'Kategori Dokumen')

@section('additional-css')
@endsection

@section('content')        
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-success btn-sm btn-add-dept">
                            <i class="fas fa-plus"></i> Tambah Kategori Dokumen
                        </button>
                        <!-- <a href="{{ url('/master/department/create') }}" class="btn btn-success btn-sm">
                            <i class="fas fa-plus"></i> Create Department
                        </a> -->
                    </div>
                </div>
                <div class="card-body">
                    <div class="treeview w-20 border">
                        <h6 class="pt-3 pl-3">Folders</h6>
                        <hr>
                        <ul class="mb-1 pl-3 pb-2">
                          <li><i class="fas fa-angle-right rotate"></i>
                            <span><i class="far fa-envelope-open ic-w mx-1"></i>Mail</span>
                            <ul class="nested">
                              <li><i class="far fa-bell ic-w mr-1"></i>Offers</li>
                              <li><i class="far fa-address-book ic-w mr-1"></i>Contacts</li>
                              <li><i class="fas fa-angle-right rotate"></i>
                                <span><i class="far fa-calendar-alt ic-w mx-1"></i>Calendar</span>
                                <ul class="nested">
                                  <li><i class="far fa-clock ic-w mr-1"></i>Deadlines</li>
                                  <li><i class="fas fa-users ic-w mr-1"></i>Meetings</li>
                                  <li><i class="fas fa-basketball-ball ic-w mr-1"></i>Workouts</li>
                                  <li><i class="fas fa-mug-hot ic-w mr-1"></i>Events</li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                          <li><i class="fas fa-angle-right rotate"></i>
                            <span><i class="far fa-folder-open ic-w mx-1"></i>Inbox</span>
                            <ul class="nested">
                              <li><i class="far fa-folder-open ic-w mr-1"></i>Admin</li>
                              <li><i class="far fa-folder-open ic-w mr-1"></i>Corporate</li>
                              <li><i class="far fa-folder-open ic-w mr-1"></i>Finance</li>
                              <li><i class="far fa-folder-open ic-w mr-1"></i>Other</li>
                            </ul>
                          </li>
                          <li><i class="fas fa-angle-right rotate"></i>
                            <span><i class="far fa-gem ic-w mx-1"></i>Favourites</span>
                            <ul class="nested">
                                <li><i class="fas fa-pepper-hot ic-w mr-1"></i>Restaurants</li>
                                <li><i class="far fa-eye ic-w mr-1"></i>Places</li>
                                <li><i class="fas fa-gamepad ic-w mr-1"></i>Games</li>
                                <li><i class="fas fa-cocktail ic-w mr-1"></i>Coctails</li>
                                <li><i class="fas fa-pizza-slice ic-w mr-1"></i>Food</li>
                              </ul>
                          </li>
                          <li><i class="far fa-comment ic-w mr-1"></i>Notes</li>
                          <li><i class="fas fa-cogs ic-w mr-1"></i>Settings</li>
                          <li><i class="fas fa-desktop ic-w mr-1"></i>Devices</li>
                          <li><i class="fas fa-trash-alt ic-w mr-1"></i>Deleted Items</li>
                        </ul>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('additional-modal')

@endsection

@section('additional-js')
<script>
    $(document).ready(function(){
        $('.treeview').mdbTreeview();
    });
</script>
@endsection