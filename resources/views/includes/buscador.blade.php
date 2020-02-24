<div id="search" class="input-group">
    <form action="{{ url('/search') }}" method="get">
        <input type="text" name="buscar" id="buscador" placeholder="buscas algún producto?" class="form-control input-lg" />
        <span class="input-group-btn">
            <button type="submit" class="btn btn-default btn-lg"><span>Buscar</span></button>
    </form>
    </span>
</div>
@section('estilob')
<style>
    .tt-query {
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    }

    .tt-hint {
        color: #999
    }

    .tt-menu {
        /* used to be tt-dropdown-menu in older versions */
        width: 422px;
        margin-top: 4px;
        padding: 4px 0;
        background-color: #fff;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, 0.2);
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
        -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
        box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
    }

    .tt-suggestion {
        padding: 3px 20px;
        line-height: 24px;
    }

    .tt-suggestion.tt-cursor,
    .tt-suggestion:hover {
        color: #fff;
        background-color: #0097cf;

    }

    .tt-suggestion p {
        margin: 0;
    }
</style>
@endsection
<script src="{{ asset('/js/typeahead.bundle.min.js') }}"></script>
<script>
    $(function() {
        //action
        var products = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: '{{ url("/products/json") }}'
        });
        //inicializar typeahead sobre nuestro input de busqueda

        $('#buscador').typeahead({
            hint: true,
            highlight: true,
            minLenght: 1
        }, {
            name: 'products',
            source: products
        });
    });
</script>