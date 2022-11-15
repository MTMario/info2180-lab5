window.addEventListener('load', function() {
    let lookupBtn = document.querySelector('#lookup');

    lookupBtn.addEventListener('click', function(element) {
        element.preventDefault();

        fetch("world.php")
            .then(response => {
                if (response.ok) {
                    return response.text()
                } else {
                    return Promise.reject('something went wrong!')
                }
            })
            .then(data => {
                let result = document.querySelector('#result');
                result.innerHTML = data;
            })
            .catch(error => console.log('There was an error: ' + error));
    });
});