import React, { Fragment } from 'react'

export default function Footer() {
  return (
    <Fragment>
      <footer className="bg-gray-200  mt-auto">
          <div className="px-4 py-3 text-black mx-auto">
              <h1 className="text-2xl hidden sm:block mb-2">Procurator</h1>
              <div className="flex">
                  <div className="ml-7 flex-grow flex-1 flex flex-col">
                      <a href="#" className="text-xs uppercase tracking-wider">Contact</a>
                      <a href="#" className="text-xs uppercase tracking-wider">About</a>
                      <a href="#" className="text-xs uppercase tracking-wider">Careers</a>
                      <a href="#" className="text-xs uppercase tracking-wider">Affiliates</a>
                  </div>
                  <div className="ml-7 flex-grow flex flex-col">
                      <a href="#" className="text-xs uppercase tracking-wider">Facebook</a>
                      <a href="#" className="text-xs uppercase tracking-wider">Instagram</a>
                      <a href="http://in1.com" className="text-xs uppercase tracking-wider">In1.com</a>
                      <a href="#" className="text-xs uppercase tracking-wider">Twitter</a>
                  </div>
              </div>
              <div className="text-right text-xs py-2">
                  <a href="">&copy;2022 Alex & Mark</a>
              </div>
          </div>
      </footer>
    </Fragment>
  )
}
