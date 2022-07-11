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
          <div className="sm:w-1/5 md:1/4 w-full flex-shrink flex-grow-0 p-4">
              <Nav />
          </div>
          <div className="sm:w-4/5 md:1/4 w-full flex-shrink flex-grow-0 p-4">
            <main role="main" className="sticky flex-auto top-0 p-4 rounded-xl w-full h-full">
              <Paragraphs />
              <Sentences />
              <Words />
              <Letters />
            </main>
          </div>
      </div>
      <Footer/>
    </Fragment>
  );
}

export default App;
