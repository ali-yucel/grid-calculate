// function getNotUnique(array) {
//     var map = new Map();
//     array.forEach(a => map.set(a, (map.get(a) || 0) + 1));
//     return array.filter(a => map.get(a) > 1);
// }

$('#submit-btn').click(function(){
    var containers  = [];
    var minwidth    = $('[name="minwidth"]').val();
    var maxwidth    = $('[name="maxwidth"]').val();
    var gutter      = $('[name="gutter"]').val();
    var colons = $('input.checked-colons:checked').map(function(){
        return $(this).val();
    });
    var colons1     = colons.get();
    $('#result-content').html('');
    for (i = minwidth; i <= maxwidth; i++) {
        var mCount  = 0;
        for(var a = 0; a < colons1.length; a++){
            var colonsx      = colons1[a];
            var totalGutter = (colonsx-1)*gutter;
            var lastWidth   = (i - totalGutter);
            if(lastWidth%colonsx == 0){
                mCount++;       
            }
        }
        if(mCount == colons1.length) {
            containers.push(i);
        }
    }
    $('#result-content').removeClass('d-none');
    console.log(containers.length);
    if(containers.length > 0) {
        $('#result-content').removeClass('alert-danger').addClass('alert-success');
        $.each(containers, function(index) {
            $('#result-content').append(this + "px<br/>");
            // output += i+"px / Kolon Adedi: "+colons  +"/ Kolon Genişliği: " + lastWidth/colons +"px<br/>";
        });
    }else {
        $('#result-content').removeClass('alert-success').addClass('alert-danger').text("Sorry, no records found!");
    }
});