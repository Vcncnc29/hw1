
function onjson(json){
 
    const uno=document.querySelector('.uno')
    const due=document.querySelector('.due')
    const tre=document.querySelector('.tre')
    const quattro=document.querySelector('.quattro')
    const cinque=document.querySelector('.cinque')
    const sei=document.querySelector('.sei')
    const sette=document.querySelector('.sette')
    const otto=document.querySelector('.otto')

    console.log(json)
    const res=json.data
    
    const i1=document.createElement('img')
    const i2=document.createElement('img')
    const i3=document.createElement('img')
    const i4=document.createElement('img')
    const i5=document.createElement('img')
    const i6=document.createElement('img')
    const i7=document.createElement('img')
    const i8=document.createElement('img')
 
    i1.src=res[0].img1
    uno.appendChild(i1)
    i2.src=res[1].img2
    due.appendChild(i2)
    i3.src=res[2].img3
    tre.appendChild(i3)
    i4.src=res[3].img4
    quattro.appendChild(i4)
    i5.src=res[4].img5
    cinque.appendChild(i5)
    i6.src=res[5].img6
    sei.appendChild(i6)
    i7.src=res[6].img7
    sette.appendChild(i7)
    i8.src=res[7].img8
    otto.appendChild(i8)
    
    
}



function onjson2(event){
    const body=document.querySelector('.nome .utente');
    
    for(evento of event){
        const imag=document.createElement('img')
        const p=document.createElement('p')
      
        imag.src=evento.img
        p.textContent=evento.nome
      
       
        body.appendChild(imag)
        body.appendChild(p)
     
        console.log(event)

    }
}


function clicca(event){
  console.log(event)
}
function q(event){
    const a=event.currentTarget
    
     a.src="https://emojigraph.org/media/emojipedia/white-heart_1f90d.png"
   
    fetch("http://localhost/un_like.php").then(onresponse2).then(clicca)
    
   
    
}

function cuore2(event){
    const c=event.currentTarget
    if(c.src=="https://emojigraph.org/media/emojipedia/white-heart_1f90d.png"){
        c.src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRl5DcMyu21aKsvwO4lhtSXlncK-p3RCbo9OSoA8ze9zi6RF5eQNOnMqRdxkwIVWRXG6A&usqp=CAU"
        fetch("http://localhost/like.php").then(onresponse2).then(clicca)
}
else{
    q(event)
}
    

    
}
function onresponse2(response){
    console.log(response)
    return response.text()
}
function onresponse(response){
    console.log(response)
    return response.json()

}



fetch("http://localhost/ajax.php").then(onresponse).then(onjson);
fetch("http://localhost/ajax2.php").then(onresponse).then(onjson2);

const cuore=document.querySelectorAll('.cuore')
for(const i of cuore){
   i.addEventListener('click',cuore2)
        
}
function onjson4(json){
  console.log(json)
  console.log(json.data.title)
  const res=json.data.phones
  super4.innerHTML=''
for(const i of res){
    
  const img=document.createElement('img')
  
  
  super4.appendChild(img)
 
  img.src=i.image
   
}
    
}


function submit2(event){
    event.preventDefault()
    const inser=document.querySelector('.in').value;
    const form_data={method:'post',body: new FormData(fform)}
    fetch("http://localhost/sito2.php",form_data).then(onresponse).then(onjson4)
   
}
const super1=document.querySelector('.super')
const uno1=document.querySelector('.uno')
const super4=document.querySelector('.super4')
const fform=document.querySelector('form')
const img_super=document.querySelector('.img_super2')
fform.addEventListener('submit',submit2)