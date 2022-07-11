import React from 'react'

export default function Nav() {
  return (
    <div className="sticky top-0 p-4 bg-gray-200 rounded-xl w-full h-full">
        <ul className="flex sm:flex-col overflow-hidden content-center justify-between">
            <li id='nav-item' className="py-2 hover:bg-indigo-300 rounded x-rota">
                <a className="truncate" href="#">
                    <img src="//cdn.jsdelivr.net/npm/heroicons@1.0.1/outline/home.svg" className="w-7 sm:mx-2 mx-4 inline" />
                    <span className="hidden sm:inline">Home</span>
                </a>
            </li>
            <li className="py-2 hover:bg-indigo-300 rounded">
                <a className="truncate" href="#">
                    <img src="//cdn.jsdelivr.net/npm/heroicons@1.0.1/outline/cog.svg" className="w-7 sm:mx-2 mx-4 inline" /> <span className="hidden sm:inline">Settings</span>
                </a>
            </li>
            <li className="py-2 hover:bg-indigo-300 rounded">
                <a className="" href="#">
                    <img src="//cdn.jsdelivr.net/npm/heroicons@1.0.1/outline/gift.svg" className="w-7 sm:mx-2 mx-4 inline" /> <span className="hidden sm:inline">Products</span>
                </a>
            </li>
            <li className="py-2 hover:bg-indigo-300 rounded">
                <a className="" href="#">
                    <img src="//cdn.jsdelivr.net/npm/heroicons@1.0.1/outline/chart-bar.svg" className="w-7 sm:mx-2 mx-4 inline" /> <span className="hidden sm:inline">Reports</span>
                </a>
            </li>
            <li className="py-2 hover:bg-indigo-300 rounded">
                <a className="" href="#">
                    <img src="//cdn.jsdelivr.net/npm/heroicons@1.0.1/outline/collection.svg" className="w-7 sm:mx-2 mx-4 inline" /> <span className="hidden sm:inline">Integrations</span>
                </a>
            </li>
        </ul>
    </div>
  )
}
