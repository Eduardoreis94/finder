function vCampos (el,er)
{
	var e=$(el) .val().replace(er,'');
		$(el).val(e);


}

function maskData(el){
			vCampos(el,/[^0-9\/]/g);

			var e=$(el).val();

			if (e.length==2)
				$(el).val(e+'/');
			if (e.length==5)
				$(el).val(e+'/');
			};
