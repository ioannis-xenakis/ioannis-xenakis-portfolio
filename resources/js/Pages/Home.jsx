import TerminalIcon from '../Assets/Terminal-Icon'

export default function Home({photos}) {
    return (
        <div className="main-content">
            <div className="photo-imjohn-group">
                <img className="john-photo" src={photos.photo_url} alt="John Xenakis photo"></img>
                <div className="im-john-box">
                    <div className="terminal-icon"> <TerminalIcon/> </div>
                    <h1 className="home-page-text"> I'm <br/><span className="blue-text">John</span> </h1>
                </div>
            </div>
        </div>
    );
}