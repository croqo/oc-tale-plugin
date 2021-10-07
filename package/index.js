import Fullpage from "fullpage.js";
import Key from "./fullpage";

$(()=>{
    const fullpage = new Fullpage("#fullpage", {
        "licenseKey": Key
    });
});