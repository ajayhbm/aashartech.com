
function toggleMenu(){
  const nav=document.getElementById('navlinks');
  if(nav) nav.classList.toggle('open');
}
document.addEventListener('click',function(e){
  const nav=document.getElementById('navlinks');
  if(nav && nav.classList.contains('open') && !e.target.closest('.nav')) nav.classList.remove('open');
});
function submitEnquiry(event){
  event.preventDefault();
  const form=event.target, notice=document.getElementById('notice');
  const data=new FormData(form);
  fetch('api/enquiry.php',{method:'POST',body:data})
    .then(r=>r.text())
    .then(t=>{
      notice.textContent=t || 'Thank you. Your enquiry has been submitted.';
      if(t.toLowerCase().includes('thank')||t.toLowerCase().includes('success')) form.reset();
    })
    .catch(()=>{
      notice.textContent='Please email basavakhbm@gmail.com or call 7892992154 for your enquiry.';
    });
}
