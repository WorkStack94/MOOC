$( document ).ready(function() {
  
    $('.remove').click(function(){
        $('.all').prop("checked",false);
        var items = $("#list2 input:checked:not('.all')");
    	items.each(function(idx,item){
          var choice = $(item);
          choice.prop("checked",false);
          choice.parent().appendTo("#list1");
        });
    });

    /* toggle all checkboxes in group */
    $('.all').click(function(e){
    	e.stopPropagation();
    	var $this = $(this);
        if($this.is(":checked")) {
        	$this.parents('.list-group').find("[type=checkbox]").prop("checked",true);
        }
        else {
        	$this.parents('.list-group').find("[type=checkbox]").prop("checked",false);
            $this.prop("checked",false);
        }
    });

});