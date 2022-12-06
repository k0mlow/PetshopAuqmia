let anchorSelector = 'a[href^="#"]';
      
        
        let anchorList = 
            document.querySelectorAll(anchorSelector);
          
        // Iterate through each of the links
        anchorList.forEach(link => {
            link.onclick = function (e) {
      
               
                e.preventDefault();
          
                
                let destination = 
                    document.querySelector(this.hash);
          
                
                destination.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
