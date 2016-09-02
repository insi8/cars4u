<html>
<head>
    <title>AJAX PHP Search Engine Script for MySQL Database</title>
    <style type="text/css">
    .se-example    {
        font-family: sans-serif;
        position: relative;
        margin: 100px;
    }
    .typeahead {
        background-color: #FFFFFF;
    }
    .typeahead:focus {
        border: 1px solid #999999;
    }
    .tt-query {
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    }
    .tt-hint {
        color: #999999;
    }
    .typeahead, .tt-query, .tt-hint {
        border: 1px solid #CCCCCC;
        border-radius: 4px;
        font-size: 16px;
        height: 38px;
        line-height: 30px;
        outline: medium none;
        padding: 8px 12px;
        width: 396px;
    }
    .tt-dropdown-menu {
        background-color: #FFFFFF;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 4px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        margin-top: 12px;
        padding: 8px 0;
        width: 422px;
    }
    .tt-suggestion {
        font-size: 16px;
        line-height: 24px;
        padding: 3px 20px;
    }
    .tt-suggestion p {
        margin: 0;
    }
    .tt-suggestion.tt-is-under-cursor {
        background-color: #999999;
        color: #FFFFFF;
    }
    </style>
</head>
<body>
    <div class="se-example">
        <input id="searchbox" type="text" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder="Search for Book Name..."/>
    </div>

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/typeahead.js"></script>
    <script>
    $(document).ready(function(){
        $('#searchbox').typeahead({
            remote:'googlelikesearchpost.php?st=%QUERY',
            limit : 5
        });
    });
    </script>
</body>
</html>