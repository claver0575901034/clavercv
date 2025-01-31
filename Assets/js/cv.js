window.onload=function() {
    document.getElementById("download")
        .addEventListener("click" , () =>{
        const telecharger =this.document.getElementById("telecharger");
        console.log(telecharger);
        console.log(window);
        var opt = {
            margin:       0,
            filename:     'mon_Cv.pdf',
            image:        { type: 'jpeg', quality: 0.98 },
            html2canvas:  { scale: 2 },
            jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
          };
          html2pdf().from(telecharger).set(opt).save();
    })
}