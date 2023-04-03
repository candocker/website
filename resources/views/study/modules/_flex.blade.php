    <style>
        #main {
            border: 1px solid #CCC;
            padding: 5px;
            position: relative;
        }
        .rownew, .row_reverse, .column, .column_reverse{
            display: flex;
            margin-bottom: 5px;
        }
        .rownew {
            flex-direction: row;
        }
        .row_reverse {
            flex-direction: row-reverse;
        }
        .column {
            flex-direction: column;
        }
        .column_reverse {
            flex-direction: column-reverse;
            position: absolute;
            top: 120px;
            left: 400px;
        }
        .rownew div, .row_reverse div, .column div, .column_reverse div {
            width: 50px;
            height: 50px;
            border: 1px solid black;
        }
    </style>
    <div id="main">
        <div class="rownew">
            <div>A</div><div>B</div><div>C</div><div>D</div><div>E</div>
        </div>
        <div class="row_reverse">
            <div>A</div><div>B</div><div>C</div><div>D</div><div>E</div>
        </div>
        <div class="column">
            <div>A</div><div>B</div><div>C</div><div>D</div><div>E</div>
        </div>
        <div class="column_reverse">
            <div>A</div><div>B</div><div>C</div><div>D</div><div>E</div>
        </div>
    </div>
