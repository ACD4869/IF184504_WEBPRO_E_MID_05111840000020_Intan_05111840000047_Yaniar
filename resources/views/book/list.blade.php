@extends('layouts.master')

@section('title')
<title>Books List</title>
@stop

@section('bar')
<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="/">
                    <h2>LIBRARY</h2>
                </a>

                <button class="hamburger hamburger--slider" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
              <li>
                  <a href="/books">
                    <i class="fas fa-book"></i>Books List</a>
              </li>
              <li>
                  <a href="/borrow/request">
                    <i class="fas fa-comment"></i>Borrow Request</a>
              </li>
              <li>
                  <a href="/borrow/history">
                    <i class="fas fa-check-square"></i>Borrows History</a>
              </li>
              <li>
                  <a href="/member-profile/{{auth()->user()->id}}">
                    <i class="fas fa-user"></i>My Profile</a>
              </li>
            </ul>
        </div>
    </nav>
</header>
<!-- END HEADER MOBILE-->

<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="/">
            <h1>LIBRARY</h1>
        </a>
        <p><br />Area 51</p>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
              <li>
                  <a href="/books">
                    <i class="fas fa-book"></i>Books List</a>
              </li>
              <li>
                  <a href="/borrow/request">
                    <i class="fas fa-comment"></i>Borrow Request</a>
              </li>
              <li>
                  <a href="/borrow/history">
                    <i class="fas fa-check-square"></i>Borrows History</a>
              </li>
              <li>
                  <a href="/member-profile/{{auth()->user()->id}}">
                    <i class="fas fa-user"></i>My Profile</a>
              </li>
            </ul>
        </nav>
    </div>
</aside>
<!-- END MENU SIDEBAR-->
@stop

@section('search')
<form class="form-header" action="/book" method="GET">
  <input name="find" class="au-input au-input--xl" type="text" name="search" placeholder="Search for title..." />
  <button class="au-btn--submit" type="submit">
      <i class="zmdi zmdi-search"></i>
  </button>
</form>
@stop

@section('content')
<div class="main-content">
  <div class="section__content section__content--p30">
    <div class="container-fluid">
      @if(session('success'))
      <div class="alert alert-success" role="alert">
        {{session('success')}}
      </div>
      @endif
      <div class="row">
        <div class="col-md-12">
          <h3 class="title-5 m-b-35">Library Book List</h3>
          <br />
          <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
              <thead>
                <tr>
                  <th>TITLE</th>
                  <th>AUTHOR</th>
                  <th>CATEGORY</th>
                  <th>ISBN</th>
                  <th>PUBLISHER</th>
                  <th>PUBLICATION YEAR</th>
                  <th>STOCK</th>
                  <th>SHELF</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data_book as $book)
                  <tr>
                    <td>{{$book->title}}</td>
                    <td>{{$book->author->name}}</td>
                    <td>{{$book->category->name}}</td>
                    <td>{{$book->ISBN}}</td>
                    <td>{{$book->publisher->name}}</td>
                    <td>{{$book->publicationYear}}</td>
                    <td>{{$book->stock}}</td>
                    <td>{{$book->shelf->name}}</td>
                    <td>
                      <form method="POST" action="/borrow/request/{{$book->id}}">
                        <input type="hidden" name="book" value="{{$book->id}}">
                        {{csrf_field()}}
                        @if($book->stock)
                        <button type="submit" class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-plus"></i>Borrow
                        </button>
                        @else
                        <button type="button" class="btn au-btn-icon btn-secondary au-btn--small" disabled>
                            Out of Stock
                        </button>
                        @endif
                    </form>
                      <!-- <a href="/borrow/request/{{$book->id}}" class="au-btn au-btn-icon au-btn--green au-btn--small">
                        <i class="zmdi zmdi-plus"></i>Borrow
                      </a> -->
                    </td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Book Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/borrow/request/{{auth()->user()->id}}" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
              <input type="text" name="title" readonly class="form-control-plaintext" id="title">
              <input type="hidden" name="book_id" readonly class="form-control-plaintext" id="id">
            </div>
          </div>
          <div class="form-group">
            <label for="staticEmail" class="col-sm-2 col-form-label">Author</label>
            <div class="col-sm-10">
              <input type="text" name="author" readonly class="form-control-plaintext" id="author">
            </div>
          </div>
          <div class="form-group">
            <label for="staticEmail" class="col-sm-2 col-form-label">Publisher</label>
            <div class="col-sm-10">
              <input type="text" name="publisher" readonly class="form-control-plaintext" id="publisher">
            </div>
          </div>
          <div class="form-group">
            <label for="staticEmail" class="col-sm-2 col-form-label">Publication Year</label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" id="publicationYear">
            </div>
          </div>
          <div class="form-group">
            <label for="staticEmail" class="col-sm-2 col-form-label">ISBN</label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" id="ISBN">
            </div>
          </div>
          <div class="form-group">
            <label for="staticEmail" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" id="category">
            </div>
          </div>
          <div class="form-group">
            <label for="staticEmail" class="col-sm-2 col-form-label">Shelf Position</label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" id="shelf">
            </div>
          </div>
          <div class="form-group">
            <label for="staticEmail" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" id="stock">
            </div>
          </div>
          <div class="form-group">
            <label for="staticEmail" class="col-sm-2 col-form-label">Requested by:</label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{auth()->user()->name}}">
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <!-- <button type="submit" class="btn btn-secondary" disabled>Request to Borrow</button> -->
          <!-- <button type="submit" class="btn btn-primary">Request to Borrow</button>
        </form>
      </div>
    </div>
  </div>
</div>  -->
@endsection

<!-- @section('addjquery')
<script type="text/javascript">
$('#exampleModal').on('list', function(e) {
var link       = e.relatedTarget(),
    modal      = $(this),
    title      = link.data("title"),
    id         = link.data("id"),
    author     = link.data("author"),
    publisher  = link.data("publisher"),
    publicationYear = link.data("publicationYear"),
    ISBN       = link.data("ISBN"),
    category   = link.data("category"),
    shelf      = link.data("shelf"),
    stock      = link.data("stock");

modal.find("#title").val(title);
modal.find("#id").val(id);
modal.find("#author").val(author);
modal.find("#publisher").val(publisher);
modal.find("#publicationYear").val(publicationYear);
modal.find("#ISBN").val(ISBN);
modal.find("#category").val(category);
modal.find("#shelf").val(shelf);
modal.find("#stock").val(stock);
});
</script>
@stop -->
