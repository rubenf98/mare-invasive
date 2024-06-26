export function download(response, filename) {
    const url = window.URL.createObjectURL(new Blob([response.data]));
    const link = document.createElement("a");
    link.href = url;
    link.setAttribute("download", filename);
    document.body.appendChild(link);
    link.click();
};

export const colors = {
    main: "#93aca7ff",
    mainHover: "#325154",
}

export const dateTypes = {
    day: "YYYY-MM-DD",
    month: "YYYY-MM",
    year: "YYYY",
    range: "YYYY",
}