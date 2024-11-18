import TerminalIcon from '../Assets/Terminal-Icon'

export default function Home() {
    return (
        <div className="main-content">
            <div className="im-john-box">
                <div className="terminal-icon"> <TerminalIcon/> </div>
                <h1 className="home-page-text"> I'm <br/><span className="blue-text">John</span> </h1>
            </div>
        </div>
    );
}