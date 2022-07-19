import{m as u,o as c,i as f,w as m,a as o,u as e,H as _,b as l,n as w,p as V,j as b}from"./app.043dd9e9.js";import{_ as k}from"./Button.8ce61165.js";import{_ as v}from"./Guest.a0b9db73.js";import{_ as x,a as r,b as i}from"./ValidationErrors.2f6799ae.js";const y=["onSubmit"],P={class:"mt-4"},$={class:"mt-4"},g={class:"flex items-center justify-end mt-4"},S=b(" Reset Password "),R={__name:"ResetPassword",props:{email:String,token:String},setup(n){const d=n,s=u({token:d.token,email:d.email,password:"",password_confirmation:""}),p=()=>{s.post(route("password.update"),{onFinish:()=>s.reset("password","password_confirmation")})};return(h,a)=>(c(),f(v,null,{default:m(()=>[o(e(_),{title:"Reset Password"}),o(x,{class:"mb-4"}),l("form",{onSubmit:V(p,["prevent"])},[l("div",null,[o(r,{for:"email",value:"Email"}),o(i,{id:"email",type:"email",class:"mt-1 block w-full",modelValue:e(s).email,"onUpdate:modelValue":a[0]||(a[0]=t=>e(s).email=t),required:"",autofocus:"",autocomplete:"username"},null,8,["modelValue"])]),l("div",P,[o(r,{for:"password",value:"Password"}),o(i,{id:"password",type:"password",class:"mt-1 block w-full",modelValue:e(s).password,"onUpdate:modelValue":a[1]||(a[1]=t=>e(s).password=t),required:"",autocomplete:"new-password"},null,8,["modelValue"])]),l("div",$,[o(r,{for:"password_confirmation",value:"Confirm Password"}),o(i,{id:"password_confirmation",type:"password",class:"mt-1 block w-full",modelValue:e(s).password_confirmation,"onUpdate:modelValue":a[2]||(a[2]=t=>e(s).password_confirmation=t),required:"",autocomplete:"new-password"},null,8,["modelValue"])]),l("div",g,[o(k,{class:w({"opacity-25":e(s).processing}),disabled:e(s).processing},{default:m(()=>[S]),_:1},8,["class","disabled"])])],40,y)]),_:1}))}};export{R as default};
