import{m as u,f,o as a,i as _,w as s,a as i,u as e,H as p,c as h,k as g,b as o,n as y,L as b,p as k,j as n}from"./app.043dd9e9.js";import{_ as v}from"./Button.8ce61165.js";import{_ as x}from"./Guest.a0b9db73.js";const w=o("div",{class:"mb-4 text-sm text-gray-600"}," Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another. ",-1),V={key:0,class:"mb-4 font-medium text-sm text-green-600"},B=["onSubmit"],E={class:"mt-4 flex items-center justify-between"},L=n(" Resend Verification Email "),N=n("Log Out"),T={__name:"VerifyEmail",props:{status:String},setup(r){const c=r,t=u(),d=()=>{t.post(route("verification.send"))},l=f(()=>c.status==="verification-link-sent");return(m,S)=>(a(),_(x,null,{default:s(()=>[i(e(p),{title:"Email Verification"}),w,e(l)?(a(),h("div",V," A new verification link has been sent to the email address you provided during registration. ")):g("",!0),o("form",{onSubmit:k(d,["prevent"])},[o("div",E,[i(v,{class:y({"opacity-25":e(t).processing}),disabled:e(t).processing},{default:s(()=>[L]),_:1},8,["class","disabled"]),i(e(b),{href:m.route("logout"),method:"post",as:"button",class:"underline text-sm text-gray-600 hover:text-gray-900"},{default:s(()=>[N]),_:1},8,["href"])])],40,B)]),_:1}))}};export{T as default};
