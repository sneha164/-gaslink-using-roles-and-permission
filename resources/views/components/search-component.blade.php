
<div class="d-flex form-inputs">
    <form method="GET" action="{{ route('product_search') }}" style="width: 100%;display: flex;">
        @csrf
        <input class="form-control" name="q" type="text" placeholder="Search any product...">
        <input type="submit" value="search" class="btn"
            style="background: #1f4975;
        color: #ffffff;">
    </form>
</div>
  
