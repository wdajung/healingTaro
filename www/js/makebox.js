$.fn.makeBox = function (text, type) {
    var  html = '', arr = text.split(','), i, checked, id = $(this).attr( 'id' ), val = $(this).val(), id_1, obj = $( '#' + id ); 
    $( obj ).prop('type', 'hidden');
    if (type == 'select') {    
        id_1 = id + '_1';
        html = '<select id="' + id_1 +'">';
        for (i in arr) {        
           /* checked = val.indexOf(arr[i]) + 1 ? 'selected' : ''; */
            html += '<option value="' + arr[i] + '" ' + checked + '>' + arr[i] + '</option>';
        }
        html += '</select>';
        $( 'body' ).on('change', '#' + id_1, function() {            
            $( '#' + id ).val( this.value ); 
        });
    } else {    
         for (i in arr) {        
            /* checked = val.indexOf(arr[i]) + 1 ? ' checked' : ''; */
            id_1 = id  + '_' + i;
            html += '<input type="' + type + '" name="' + id + '_1' + '" id="' + id_1 +'" value="' + arr[i] + '"' + checked + ' class="' + id + '">';
            html += '<label for="' + id_1 + '">' + arr[i] + '</label>&nbsp;';
         } 
        $( 'body' ).on( 'click', '.' + id, function() {
            var ar = [];
            $( '.' + id ).each( function() {
                if (this.checked) ar.push(this.value); 
            });
            obj.val( ar.join(',') ); 
        });
     }
    $( '#' + id ).after(html); 
}