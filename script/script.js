// let cadastro =[$nome, $usuario, $email, $senha];

// $('#nome').html($nome);
// $('#usuario').html($usuario);
// $('#email').html($email);
// $('#senha').html($senha);

// $('btn_salvar').on('click',()=>{


// document.write(cadastro)
// })

const btnRotary=document.querySelector("#btn")
const btnRotary2=document.querySelector("#btn1")
const card1=document.querySelector('section#sect1')
const card2=document.querySelector('section#sect2')

btnRotary.addEventListener('click',(evt)=>{
    evt.preventDefault()
  card1.classList.toggle('rotary')
  card2.classList.toggle('rotary')
  //   rotary()
  console.log(card1)
  
  
})

btnRotary2.addEventListener('click',(evt)=>{
    evt.preventDefault()
    card1.classList.toggle('rotary')
    card2.classList.toggle('rotary')
    // evt.classList.toggle("rotary")
    console.log(card2)
    // rotary()
})

// function rotary(){
//     card.addEventListener('click',(evt)=>{
//     evt.classList.toggle("rotary")
        
//         console.log(card)
//     })
// }