


     $('.portItems').hover(function() {
       $('.portDesc').css({
	 	height: '100%',
	 	borderRadius: 23
	   }) 
     }); // end of hover for portItems

     $('.portDesc').mouseenter(function() {
     	$(this).css({
     		opacity: 0.4,
     		color: '#f8a506'
     	}).mouseleave(function() {
     		$(this).css({
     			opacity: 0.8,
     			color: 'white'
     		})
     	});
     }); // end of hover for portDesc
