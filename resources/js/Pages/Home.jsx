import TerminalIcon from '../Assets/Terminal-Icon'

export default function Home({photos}) {
    return (
        <div className="main-content">
            <img src={photos.photo_url}></img>
            <div className="im-john-box">
                <div className="terminal-icon"> <TerminalIcon/> </div>
                <h1 className="home-page-text"> I'm <br/><span className="blue-text">John</span> </h1>
            </div>
        </div>
    );
}