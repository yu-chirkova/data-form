document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form');
    const formFields = form.querySelectorAll('.form-control');
    const textForm = document.querySelector('.text');
    const commentCont = document.querySelector('.comment-cont .row')

    form.addEventListener('submit', e => {
        e.preventDefault();
        let error = false;
        let name = this.getElementById("name").value;
        let email = this.getElementById("email").value;
        let comment = this.getElementById("comment").value;

        for (let i = 0; i < formFields.length; i++) {
            if (!formFields[i].value) {
                formFields[i].classList.add('error');
                textForm.classList.add('error');
                textForm.innerHTML = 'Заполните все обязательные поля'
                error = true;
                break;
            } else {
                formFields[i].classList.remove('error');
                textForm.innerHTML = '';
                error = false;
            }
        }

        if (!error) {
            $.ajax({
                type: 'POST',
                url: 'data.php',
                dataType: 'text',
                data: {
                    name: name,
                    email: email,
                    comment: comment
                },
                success: function (response) {
                    if (response['error']) {
                        alert(response['error']);
                    } else {
                        textForm.classList.add('success');
                        textForm.innerHTML = 'Ваши данные записаны';
                        commentCont.insertAdjacentHTML('beforeend', `
                        <div class="col-12 col-sm-6 col-md-4 user-comment">
                            <div class="user-comment-wrap">
                                <div class="name">${name}</div>
                                <div class="comment">
                                   <div class="email">
                                     ${email}
                                  </div>
                                  <div class="comment-text">
                                     ${comment}
                                  </div>
                               </div>
                            </div>
                        </div>
                        `)
                        setTimeout(function () {
                            textForm.innerHTML = '';
                            form.reset();
                        }, 3000)
                  }
                },
                error: function(xhr, resp, text) {
                    console.log(xhr, resp, text);
                }
            });
        }
    })
})



