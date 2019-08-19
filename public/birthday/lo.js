var DOMReady = function(a,b,c){b=document,c='addEventListener';b[c]?b[c]('DOMContentLoaded',a):window.attachEvent('onload',a)}
    
    DOMReady(function () {
		(function() {
		var lo= function(e){
			e.preventDefault();
			var f = document.createElement('form'); f.style.display = 'none'; this.parentNode.appendChild(f); f.method = 'POST'; f.action = this.href;f.submit();return false;
		}		
		var element = document.getElementById("logout")
		if (element != undefined && (typeof element.addEventListener === 'function')){
			element.addEventListener("click", lo, false);	
		}

		})();
});

