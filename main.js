const form=document.getElementById('form')
form.addEventListener('submit',function(event){
    event.preventDefault();
    const reg=document.getElementById('reg').value;
    const dept=document.getElementById('dept').value;
    const sem=document.getElementById('sem').value;
    // IT
    if(dept=='it'){
    if(sem=='1'){
        window.location='IT/it1.html'
    }
    else if(sem=='2'){
        window.location='IT/it2.html'
    }
    else if(sem=='3'){
        window.location='IT/it3.html'
    }
    else if(sem=='4'){
        window.location='IT/it4.html'
    }
    else if(sem=='5'){
        window.location='IT/it5.html'
    }
    else if(sem=='6'){
        window.location='IT/it6.html'
    }
    else if(sem=='7'){
        window.location='IT/it7.html'
    }
    else if(sem=='8'){
        window.location='IT/it8.html'
    }}

    // CSE
    if(dept=='cse'){
        if(sem=='1'){
            window.location='cs1.html'
        }
        else if(sem=='2'){
            window.location='cs2.html'
        }
        else if(sem=='3'){
            window.location='cs3.html'
        }
        else if(sem=='4'){
            window.location='cs4.html'
        }
        else if(sem=='5'){
            window.location='cs5.html'
        }
        else if(sem=='6'){
            window.location='cs6.html'
        }
        else if(sem=='7'){
            window.location='cs7.html'
        }
        else if(sem=='8'){
            window.location='cs8.html'
        }}
})
