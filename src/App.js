import { Fragment } from "react";
import Nav from "./components/Nav";
import Paragraphs from "./components/Paragraphs";
import Sentences from "./components/Sentences";
import Words from "./components/Words";
import Letters from "./components/Letters";
import Footer from "./components/Footer";

function App() {
  return (
    <Fragment>
      <div className="w-full flex flex-col sm:flex-row flex-grow overflow-hidden h-full">
          <div className="sm:w-1/3 md:1/4 w-full flex-shrink flex-grow-0 p-4">
              <Nav />
          </div>
          <main role="main" className="w-full h-full flex-grow p-4 overflow-auto">
            <Paragraphs />
            <Sentences />
            <Words />
            <Letters />
          </main>
      </div>
      <Footer/>
    </Fragment>
  );
}

export default App;
