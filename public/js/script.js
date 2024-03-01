const change = (src) => {
    document.getElementById("view-image").src = src;
};

function ShowPassword() {
    var password = document.getElementById("password");
    var eyeShow = document.getElementById("eyeShow");
    var eyeHidden = document.getElementById("eyeHidden");
    if (password.type === "password") {
        password.type = "text";

        eyeShow.classList.add("hidden");
        eyeHidden.classList.remove("hidden");
    } else {
        password.type = "password";

        eyeHidden.classList.add("hidden");
        eyeShow.classList.remove("hidden");
    }
}

const clothes = {
    wanita: ["dress", "daster", "jubah", "gaun"],
    pria: ["lengan panjang", "lengan pendek", "baju formal"],
    anak: ["lengan panjang", "lengan pendek"],
    kain: ["tenun ikat", 'kain batik cap', 'kain batik sablon']
};

function updateModel() {
    const gender = document.getElementById("gender");

    gender.addEventListener("change", function () {
        const genders = document.getElementById("gender");
        const modelSelect = document.getElementById("model");
        var optionDefault = document.createElement('option');
        optionDefault.className = 'uppercase';
        optionDefault.value = '';
        optionDefault.selected = true;
        optionDefault.textContent = 'Pilih'
        
        if(genders.length > 0){
            modelSelect.innerHTML = '';
            modelSelect.append(optionDefault);
            modelSelect.disabled = false;
        }
        clothes[genders.value].forEach((    clothes) => {
            var option =
                `<option class="uppercase" value="` +
                clothes +
                `">` +
                clothes +
                `</option>`;
                var options = document.createElement("option");
                options.className = 'uppercase';
                options.value = clothes;
                options.textContent = clothes;
                modelSelect.append(options);

        });

    });
}
