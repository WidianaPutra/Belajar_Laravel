function HTTPDelete(url, token) {
    console.log(url);
    fetch(url, {
        method: "DELETE",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": token,
        },
    });
    window.location.reload();
}
