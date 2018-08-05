$('form.contactForm').on('submit' , function() {
    var that =$(this),
        url=that.attr('action'),
        type=that.attr('method'),
        data={},
        ferror=false,
        emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i,
		phoneExp= /^\d{10}$/;
    
     that.find('[name]').each(function(index,value){
       var that=$(this),
           name=that.attr('name'),
           value=that.val(),
        rule = that.attr('data-rule');

      if (rule !== undefined) {
        var ierror = false; // error flag for current input
        var pos = rule.indexOf(':', 0);
        if (pos >= 0) {
          var exp = rule.substr(pos + 1, rule.length);
          rule = rule.substr(0, pos);
        } else {
          rule = rule.substr(pos + 1, rule.length);
        }

        switch (rule) {
          case 'required':
            if (value === '') {
              ferror = ierror = true;
            }
            break;

          case 'minlen':
            if (value.length < parseInt(exp)) {
              ferror = ierror = true;
            }
            break;

          case 'email':
            if (!emailExp.test(value)) {
              ferror = ierror = true;
            }
            break;

          case 'checked':
            if (! that.is(':checked')) {
              ferror = ierror = true;
            }
            break;

          case 'regexp':
            exp = new RegExp(exp);
            if (!exp.test(value)) {
              ferror = ierror = true;
            }
            break;
				
			case 'phone':
				if (!phoneExp.test(value)) {
              ferror = ierror = true;
            }
				break;
        }
        that.next('.validation').html((ierror ? (that.attr('data-msg') !== undefined ? that.attr('data-msg') : 'wrong Input') : '')).show('blind');
      }
        
    });
    if(ferror) return false;
         else data[name]=value;
    $.ajax({
    url:url,
        type:type,
        data:data,
        success:function(response){
             if (response=='OK') {
          $("#sendmessage").addClass("show");
          $("#errormessage").removeClass("show");
          $('.contactForm').find("input, textarea").val("");
        } else {
          $("#sendmessage").removeClass("show");
          $("#errormessage").addClass("show");
          $('#errormessage').html(msg);
        }
        
        }
    });
    
    return false;
});