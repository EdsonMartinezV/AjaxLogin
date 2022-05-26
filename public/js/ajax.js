(() => {
    const xhr = new XMLHttpRequest()
    $xhr = document.getElementById('xhr')
    $fragment = document.createDocumentFragment()

    xhr.addEventListener("readystatechange", (e) => {
        if (xhr.readyState !== 4) return
        if (xhr.status >= 200 && xhr.status < 300) {
            console.log(xhr.responseText)
            console.log(xhr.status)
            console.log(xhr.readyState)
            const data = JSON.parse(xhr.responseText)
            data.forEach((item) => {
                const $li = document.createElement('li')
                $li.textContent = item.name
                $fragment.appendChild($li)
            })
            $xhr.appendChild($fragment)
        } else {
            let message = xhr.statusText || 'Something went wrong'
            $xhr.textContent = xhr.status+" "+message
        }
    })

    xhr.open("GET", "https://jsonplaceholder.typicode.com/users")
    xhr.send();
})();